<?php

/**
 * This is the model class for table "simplePortfolio".
 *
 * The followings are the available columns in table 'simplePortfolio':
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $url
 * @property integer $sort
 */
class SimplePortfolio extends EActiveRecord
{
    const PAGE_SIZE = 8;

    const TYPE_FACE = 'face';
    const TYPE_IMAGE = 'image';

    const SIZE_IMAGE_WIDTH = 600;
    const SIZE_FACE_WIDTH = 300;
    const SIZE_FACE_HEIGHT = 300;

    public $face;
    public $full;


    public function tableName()
	{
		return 'simplePortfolio';
	}

	public function rules()
	{
		return array(
			array('sort', 'numerical', 'integerOnly'=>true),
			array('title, url', 'length', 'max'=>255),
			array('desc', 'safe'),
            array('face,full', 'file', 'types' => 'png, jpg, gif', 'allowEmpty' => !$this->isNewRecord,),
            array('face', 'common.extensions.image.ImageValidator', 'width' => self::SIZE_FACE_WIDTH, 'height' => self::SIZE_FACE_HEIGHT),
            array('full', 'common.extensions.image.ImageValidator', 'width' => array('min' => self::SIZE_IMAGE_WIDTH)),
			array('title, desc, url', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

    public function behaviors()
    {
        return array(
            'sortable' => array(
                'class' => 'backend.extensions.sortable.SortableBehavior',
                'column' => 'sort',
            ),
            'faceImg' => array(
                'class' => 'common.extensions.image.ImageBehavior',
                'folder' => 'simple_portfolio',
                'attribute' => 'face',
                'types' => array(
                    self::TYPE_FACE => array(),
                ),
            ),
            'fullImg' => array(
                'class' => 'common.extensions.image.ImageBehavior',
                'folder' => 'simple_portfolio',
                'attribute' => 'full',
                'types' => array(
                    self::TYPE_IMAGE => array(
                        'resize' => array(
                            'width' => self::SIZE_IMAGE_WIDTH,
                        ),
                    ),
                ),
            )
        );
    }

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Заголовок',
			'desc' => 'Описание',
			'url' => 'Ссылка',
			'sort' => 'Сортировка',
            'face' => 'Превью 300x300',
            'full' => 'Фото',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('title',$this->title,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function page($currentPage)
    {
        $criteria = new CDbCriteria();
        $criteria->limit = self::PAGE_SIZE;
        $criteria->offset = ($currentPage - 1) * self::PAGE_SIZE;
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
