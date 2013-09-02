<?php

/**
 * This is the model class for table "pfWorks".
 *
 * The followings are the available columns in table 'pfWorks':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property integer $status
 * @property integer $position
 * @property integer $face_id
 *
 * The followings are the available model relations:
 * @property PfPages[] $pfPages
 */
class PfWorks extends CActiveRecord
{

    const STATUS_APPROVED = 1;
    const STATUS_UNAPPROVED = 0;

	public function tableName()
	{
		return 'pfWorks';
	}

	public function rules()
	{
		return array(
            array('title,desc','required'),
			array('status, position, face_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('desc', 'safe'),
			array('title, desc, status', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'pfPages' => array(self::HAS_MANY, 'PfPages', 'work_id'),
		);
	}

    public function behaviors()
    {
        return array(
            'sortable' => array(
                'class' => 'backend.extensions.sortable.SortableBehavior',
                'column' => 'position',
            )
        );
    }

	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'title' => 'Название',
			'desc' => 'Описание',
			'status' => 'Опубликован',
		);
	}

	/**
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
