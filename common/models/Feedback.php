<?php

/**
 * This is the model class for table "feedback".
 *
 * The followings are the available columns in table 'feedback':
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $author
 * @property boolean $approve
 */
class Feedback extends EActiveRecord
{
	public function tableName()
	{
		return 'feedback';
	}

	public function rules()
	{
		return array(
			array('approve', 'boolean'),
			array('title, author', 'length', 'max'=>255),
			array('text', 'safe'),
			array('id, title, text, author, approve', 'safe', 'on'=>'search'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'title' => 'Заголовок',
			'text' => 'Текст',
			'author' => 'Имя автора',
			'approve' => 'Статус',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('approve',$this->approve);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
