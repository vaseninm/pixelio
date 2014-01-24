<?php

/**
 * This is the model class for table "notice".
 *
 * The followings are the available columns in table 'notice':
 * @property integer $id
 * @property string $type
 * @property string $address
 * @property integer $domain_id
 */
class Notice extends CActiveRecord
{

	const TYPE_EMAIL = 'EMAIL';
	
	public function tableName()
	{
		return 'notice';
	}


	public function rules()
	{
		return array(
			array('domain_id', 'numerical', 'integerOnly'=>true),
			array('type, address', 'length', 'max'=>255),
			array('domain_id,type', 'required'),
			array('id, type, address, domain_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'domain' => array(self::BELONGS_TO, 'Domains', 'domain_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Тип',
			'address' => 'Адрес',
			'domain_id' => 'Домен',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('domain_id',$this->domain_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function domain($domain_id)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('domain_id', $domain_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }
	
	public function type($type)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('type', $type);
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
	
	
	public static function getType($type = false) {
		$types = array(
			Notice::TYPE_EMAIL => 'e-mail',
		);
		if ($type !== false) {
			return $types[$type];
		} else {
			return $types;
		}
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function sendEmail($mail) {
		$models = Notice::model()
			->domain(Domains::current()->id)
			->type(Notice::TYPE_EMAIL)
			->findAll();
		
		$mail->setTo(CHtml::listData($models, 'id', 'address'));
		$mail->send();
	}
}
