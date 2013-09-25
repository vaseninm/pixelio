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
 * @property integer $createTime
 * @property integer $face_id
 *
 * The followings are the available model relations:
 * @property PfPages[] $pages
 * @property PfTags[] $tags
 */
class PfWorks extends EActiveRecord
{

    const STATUS_APPROVED = 1;
    const STATUS_UNAPPROVED = 0;

    const PAGE_SIZE = 8;

	public function tableName()
	{
		return 'pfWorks';
	}

	public function rules()
	{
		return array(
            array('title,desc','required'),
			array('status, position, face_id, createTime', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('status', 'issetFace'),
			array('desc,tags', 'safe'),
			array('title, desc, status, createTime', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'pages' => array(self::HAS_MANY, 'PfPages', 'work_id'),
			'face' => array(self::BELONGS_TO, 'PfPages', 'face_id'),
            'tags' => array(self::MANY_MANY, 'PfTags', 'pfTagWorkRelation(work_id, tag_id)'),
        );
	}

    public function behaviors()
    {
        return array(
            'sortable' => array(
                'class' => 'backend.extensions.sortable.SortableBehavior',
                'column' => 'position',
            ),
            'activerecord-relation'=>array(
                'class'=>'vendor.yiiext.activerecord-relation-behavior.EActiveRecordRelationBehavior',
            ),
        );
    }

    public function scopes()
    {
        return array(
            'approve' => array(
                'condition'=>"status = " . self::STATUS_APPROVED,
            ),
        );
    }

	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'title' => 'Название',
			'desc' => 'Описание',
			'status' => 'Опубликован',
			'createTime' => 'Время публикации',
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('title',$this->title,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function tag($id)
    {
        $this->getDbCriteria()->mergeWith(array(
            'with' => array(
                'tags' => array(
                    'condition' => 'tags.id = :id',
                    'params' => array(
                        ':id' => $id,
                    ),
                    'together'=>true,
                ),
            )
        ));
        return $this;
    }

    public function issetFace($attribute, $params){
        if ($this->$attribute && !isset($this->face)) {
            $this->addError($attribute, Yii::t('portfolio', 'Не указана лицевая страница.'));
        }
    }

    public function page($currentPage)
    {
        $criteria = new CDbCriteria();
        $criteria->limit = self::PAGE_SIZE;
        $criteria->offset = ($currentPage - 1)*self::PAGE_SIZE;
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    protected function beforeDelete() {
        foreach ($this->pages as $page) {
            $page->delete();
        }
        return parent::beforeDelete();
    }

    protected function afterConstruct(){
        parent::afterConstruct();
        $this->createTime = time();
    }
}
