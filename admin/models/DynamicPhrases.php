<?php

/**
 * This is the model class for table "dynamicPhrases".
 *
 * The followings are the available columns in table 'dynamicPhrases':
 * @property integer $id
 * @property integer $phrase_id
 * @property integer $value
 */
class DynamicPhrases extends EActiveRecord
{
	public function tableName()
	{
		return 'dynamicPhrases';
	}

	public function rules()
	{
		return array(
			array('value', 'length', 'max'=>255),
			array('phrase_id', 'numerical', 'integerOnly'=>true),
			array('id, phrase_id, value', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'phrase' => array(self::BELONGS_TO, 'Phrases', 'phrase_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'phrase_id' => 'Фраза',
			'value' => 'Значение',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('phrase_id',$this->phrase_id);
		$criteria->compare('value',$this->value);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
