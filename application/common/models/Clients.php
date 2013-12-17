<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property string $ip
 * @property string $status
 * @property integer $theme_id
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
            array('ip', 'unique'),
            array('theme_id', 'numerical', 'integerOnly'=>true),
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
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ip' => 'Ip',
			'status' => 'Статус',
			'theme_id' => 'Тема',
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('theme_id',$this->theme_id);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    public static function register() {
        $client = self::you();
        if (!$client) {
            $client = new self();
            $client->ip = Yii::app()->request->userHostAddress;
            $client->status = self::STATUS_NEW;
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

    public static function you() {
        return Clients::model()->findByAttributes(array(
            'ip' => Yii::app()->request->userHostAddress,
        ));
    }
}
