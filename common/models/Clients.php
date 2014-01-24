<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property string $ip
 * @property string $status
 * @property integer $theme_id
 * @property integer $domain_id
 * @property string update_time
 *
 * The followings are the available model relations:
 * @property Messages[] $messages
 * @property Visits[] $visits
 * @property Themes $theme
 */
class Clients extends EActiveRecord
{

    const STATUS_NEW = 'NEW';
    const STATUS_RESPONDED = 'RESPONDED';
    const STATUS_CONTACTED = 'CONTACTED';
    const STATUS_PAID = 'PAID';

    public $count;

	public function tableName()
	{
		return 'clients';
	}


	public function rules()
	{

		return array(
			array('status, ip', 'length', 'max'=>255),
            array('domain_id', 'required'),
            array('theme_id, domain_id', 'numerical', 'integerOnly'=>true),
            array('status', 'in', 'range'=>array(Clients::STATUS_NEW, Clients::STATUS_RESPONDED, Clients::STATUS_CONTACTED, Clients::STATUS_PAID)),
			array('id, ip, status, theme_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'messages' => array(self::HAS_MANY, 'Messages', 'client_id'),
			'visits' => array(self::HAS_MANY, 'Visits', 'client_id'),
			'theme' => array(self::BELONGS_TO, 'Themes', 'theme_id'),
			'domain' => array(self::BELONGS_TO, 'Domains', 'domain_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ip' => 'Ip',
			'status' => 'Статус',
			'theme_id' => 'Тема',
            'domain_id' => 'Домен',
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('theme_id',$this->theme_id);
		$criteria->compare('status',$this->status,true);
        $criteria->compare('domain_id',$this->domain_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function domain($domain_id)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('domain_id', $domain_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }
	
	public function user($user_id) {
		$criteria = new CDbCriteria();
		$criteria->with = array('domain');
        $criteria->compare('domain.user_id', $user_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
	}
	
	public function period($start, $end) {
		$criteria = new CDbCriteria();
		$criteria->addBetweenCondition('`t`.`update_time`', $start, $end);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
	}

    public static function register() {
        $client = Clients::you();
        if (!$client) {
            $client = new self();
            $client->ip = Yii::app()->request->userHostAddress;
            $client->status = self::STATUS_NEW;
            $client->domain_id = Domains::current()->id;
        }
        if (!$client->theme_id) {
            $theme = Themes::getTheme();
            $client->theme_id = $theme->id;
            $client->theme = $theme;
        }
        if ($client->theme) {
            Themes::setTheme($client->theme->name);
        }
        $client->save();
        $visit = new Visits();
        $visit->client_id = $client->id;
        $visit->time = new CDbExpression('NOW()');
        $visit->parseRefferer(Yii::app()->request->urlReferrer, Yii::app()->request->hostInfo);
        $visit->save();
        return $client;
    }
	
	public function beforeSave() {
		if (parent::beforeSave()) {
			$this->update_time = new CDbExpression('NOW()');
			return true;
		}
		return false;
	}

		/**
	 * @return Clients
	 */
    public static function you() {
        return Clients::model()->domain(Domains::current()->id)->findByAttributes(array(
            'ip' => Yii::app()->request->userHostAddress,
        ));
    }
	
	public static function getSales($userCriteria) {
		$criteria = new CDbCriteria();
		$criteria->group = 'status';
        $criteria->select = 'COUNT(id) as count, status';
		$criteria->mergeWith($userCriteria);
		$sales = CHtml::listData(Clients::model()->findAll($criteria), 'status', 'count');
		$fill = array(
			Clients::STATUS_NEW => 0,
			Clients::STATUS_RESPONDED => 0,
			Clients::STATUS_CONTACTED => 0,
			Clients::STATUS_PAID => 0,	
		);
		return ($sales + $fill);
	}
	
	public static function getConversion($userCriteria) {
		$sales = Clients::getSales($userCriteria);
		$all = array_sum($sales);
		if ($all === 0) return 0;
		return round(($all - $sales[Clients::STATUS_NEW]) * 100 / $all);
	}
}
