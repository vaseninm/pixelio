<?php

use Zend\Mail;

/**
 * This is the model class for table "messages".
 *
 * The followings are the available columns in table 'messages':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $comfortTime
 * @property integer $client_id
 * @property string $time
 *
 * The followings are the available model relations:
 * @property Clients $client
 */
class Messages extends EActiveRecord
{
	public function tableName()
	{
		return 'messages';
	}

	public function rules()
	{
		return array(
			array('client_id', 'numerical', 'integerOnly'=>true),
			array('name, email, phone, comfortTime, time', 'length', 'max'=>255),
			array('phone', 'required'),
			array('message', 'safe'),
			array('id, client_id, name, email, phone, message, comfortTime, time', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'client' => array(self::BELONGS_TO, 'Clients', 'client_id'),
		);
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'client_id' => 'Visit',
			'name' => 'Имя',
			'email' => 'Почта',
			'phone' => 'Телефон',
			'message' => 'Сообщение',
			'comfortTime' => 'Удобное время',
			'time' => 'Время отправки',
		);
	}
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('comfortTime',$this->comfortTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function period($start, $end) {
		$criteria = new CDbCriteria();
		$criteria->addBetweenCondition('`t`.`time`', $start, $end);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
	}

    public function sendClientInfoToEmail(){
        $mail = new YiiMailer('newMessage', array(
			'message' => $this, 
			'client' => Clients::you(), 
			'domain' => Domains::current(),
		));
		
        $mail->setFrom('no-reply@' . Domains::current()->domain, 'Уведомитель');
		$mail->setSubject('Новый лид ' . CHtml::encode(Domains::current()->domain));
		
		Notice::sendEmail($mail);
    }
	
	public function afterConstruct() {
		parent::afterConstruct();
		$this->time = new CDbExpression('NOW()');
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
