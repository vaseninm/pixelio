<?php

/**
 * This is the model class for table "pfTags".
 *
 * The followings are the available columns in table 'pfTags':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property integer $price
 * @property integer $domain_id
 *
 * The followings are the available model relations:
 * @property PfWorks[] works
 */
class PfTags extends EActiveRecord
{
	public function tableName()
	{
		return 'pfTags';
	}

	public function rules()
	{
		return array(
            array('title', 'unique'),
            array('title, price', 'required'),
			array('title', 'length', 'max'=>255),
            array('desc', 'safe'),
			array('title, price', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'works' => array(self::MANY_MANY, 'PfWorks', 'pfTagWorkRelation(tag_id, work_id)'),
            'worksCount'=>array(self::STAT, 'PfWorks', 'pfTagWorkRelation(tag_id, work_id)',
                'condition' => 'status = 1',
            ),
        );
	}

	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'title' => 'Заголовок',
			'price' => 'Стоимость',
			'desc' => 'Описание',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('desc',$this->title,true);
        $criteria->compare('price',$this->price);

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