<?php

/**
 * This is the model class for table "domains".
 *
 * The followings are the available columns in table 'domains':
 * @property integer $id
 * @property string $domain
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 * @property int $user_id
 */
class Domains extends EActiveRecord
{

    const STATUS_NEW = 'NEW';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BLOCKED = 'BLOCKED';
    const STATUS_DELETED = 'DELETED';

    protected static $current;

    public function tableName()
	{
		return 'domains';
	}

	public function rules()
	{
		return array(
			array('domain, status, user_id', 'required'),
			array('domain', 'unique'),
			array('domain', 'match', 'pattern' => '/^([a-zA-ZА-Я0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/'),
			array('status', 'in', 'range' => Domains::getStatusList()),
			array('domain, status', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			array('id, domain, status, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'domain' => 'Домен',
			'status' => 'Статус',
			'create_time' => 'Время создания',
			'update_time' => 'Время обновления',
			'user_id' => 'Пользователь',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function user($user_id) {
		$criteria = new CDbCriteria();
        $criteria->compare('user_id', $user_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
	}

	public function beforeSave() {
        if ($this->isNewRecord) {
            $this->create_time = new CDbExpression('NOW()');
        }
        $this->update_time = new CDbExpression('NOW()');
        return true;
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function clean ($domain) {
        $domain = preg_replace('/^(www.)?(.+)$/i', '$2', $domain);
        return $domain;
    }

    public static function current () {
        if (!Domains::$current) {
            $model = Domains::model()->findByAttributes(array(
                'domain' => Domains::clean(Yii::app()->request->getServerName()),
            ));
            if (!$model) throw new CHttpException(404, 'Домен не найден');
            if (!$model->status === Domains::STATUS_NEW) throw new CHttpException(404, 'Домен только добавлен. Ждите.');
            if (!$model->status === Domains::STATUS_BLOCKED) throw new CHttpException(404, 'Домен временно заблокирован.');
            if (!$model->status === Domains::STATUS_DELETED) throw new CHttpException(404, 'Домен удален.');
            Domains::$current = $model;
        }
        return Domains::$current;
    }

	public static function getActive() {
        $models = Domains::model()
				->user(Yii::app()->user->id)
				->findAllByAttributes(array('status' => Domains::STATUS_ACTIVE));
        return CHtml::listData($models, 'id', 'domain');
    }
	
	public static function getStatusLabelList() {
		return array(
			Domains::STATUS_ACTIVE => 'Активный',
			Domains::STATUS_NEW => 'Неактивирован',
			Domains::STATUS_BLOCKED => 'Заблокирован',
			Domains::STATUS_DELETED => 'Удален',
		);
	}
	
	public static function getStatusLabel($status) {
		$statusList = Domains::getStatusLabelList();
		
		return isset($statusList[$status]) ? $statusList[$status] : 'Неизветный';
	}
	
	public static function getStatusList() {
		return array_keys(Domains::getStatusLabelList());
	}
	
}
