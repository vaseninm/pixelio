<?php

use Zend\Mail;

/**
 * This is the model class for table "messages".
 *
 * The followings are the available columns in table 'messages':
 * @property integer $id
 * @property integer $visit_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $comfortTime
 *
 * The followings are the available model relations:
 * @property Visits $visit
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
			array('visit_id', 'numerical', 'integerOnly'=>true),
			array('name, email, phone, comfortTime', 'length', 'max'=>255),
			array('message', 'safe'),
			array('id, visit_id, name, email, phone, message, comfortTime', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'visit' => array(self::BELONGS_TO, 'Visits', 'visit_id'),
		);
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'visit_id' => 'Visit',
			'name' => 'Имя',
			'email' => 'Почта',
			'phone' => 'Телефон',
			'message' => 'Сообщение',
			'comfortTime' => 'Удобное время',
		);
	}
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('visit_id',$this->visit_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('comfortTime',$this->comfortTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function sendClientInfoToEmail($body, $email){
        $mail = new Mail\Message();
        $mail->setEncoding("UTF-8");
        $mail->setBody($body);
        $mail->setFrom('no-reply@pixelio.ru', 'Уведомитель');
        $mail->addTo($email, 'Администратор');
        $mail->setSubject('Новый лид ' . CHtml::encode($this->name));

        $transport = new Mail\Transport\Sendmail();
        $transport->send($mail);
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
