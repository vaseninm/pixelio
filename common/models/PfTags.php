<?php

/**
 * This is the model class for table "pfTags".
 *
 * The followings are the available columns in table 'pfTags':
 * @property integer $id
 * @property string $title
 *
 * The followings are the available model relations:
 * @property PfWorks[] works
 */
class PfTags extends CActiveRecord
{
	public function tableName()
	{
		return 'pfTags';
	}

	public function rules()
	{
		return array(
            array('title', 'required'),
			array('title', 'length', 'max'=>255),
			array('title', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'works' => array(self::MANY_MANY, 'PfWorks', 'pfTagWorkRelation(tag_id, work_id)'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'title' => 'Заголовок',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public static function getTagsList() {
        $models =  self::model()->findAll();
        return CHtml::listData($models, 'id', 'title');
    }

    public function work($id)
    {
        $this->getDbCriteria()->mergeWith(array(
            'with' => array(
                'works' => array(
                    'condition' => 'id = :id',
                    'params' => array(
                        ':id' => $id,
                    ),
                ),
            )
        ));
        return $this;
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}