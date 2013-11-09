<?php

/**
 * This is the model class for table "team".
 *
 * The followings are the available columns in table 'team':
 * @property integer $id
 * @property string $fullname
 * @property string $position
 * @property string $about
 * @property int $sort
 */
class Team extends EActiveRecord
{

    const PAGE_SIZE = 4;

    const TYPE_FACE = 'face';
    const TYPE_IMAGE = 'image';

    const SIZE_IMAGE_WIDTH = 600;
    const SIZE_FACE_WIDTH = 300;
    const SIZE_FACE_HEIGHT = 300;

    public $face;
    public $full;

    public function tableName()
    {
        return 'team';
    }

    public function rules()
    {
        return array(
            array('fullname, position', 'length', 'max' => 255),
            array('fullname, position, about', 'required'),
            array('face,full', 'file', 'types' => 'png, jpg, gif', 'allowEmpty' => !$this->isNewRecord,),
            array('about', 'safe'),
            array('face', 'common.extensions.image.ImageValidator', 'width' => self::SIZE_FACE_WIDTH, 'height' => self::SIZE_FACE_HEIGHT),
            array('full', 'common.extensions.image.ImageValidator', 'width' => array('min' => self::SIZE_IMAGE_WIDTH)),
            array('sort', 'numerical', 'integerOnly' => true),
            array('fullname, position', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array();
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
                'folder' => 'team',
                'attribute' => 'face',
                'types' => array(
                    self::TYPE_FACE => array(),
                ),
            ),
            'fullImg' => array(
                'class' => 'common.extensions.image.ImageBehavior',
                'folder' => 'team',
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
            'fullname' => 'Полное имя',
            'position' => 'Должность',
            'about' => 'О себе',
            'face' => 'Превью 300x300',
            'full' => 'Фото',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('fullname', $this->fullname, true);
        $criteria->compare('position', $this->position, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => array(
                    'sort' => CSort::SORT_ASC,
                ),
            ),
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

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
