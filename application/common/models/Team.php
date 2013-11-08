<?php
use Intervention\Image\Image;

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
class Team extends CActiveRecord
{

    const PAGE_SIZE = 4;

	public function tableName()
	{
		return 'team';
	}

	public function rules()
	{
		return array(
			array('fullname, position', 'length', 'max'=>255),
            array('fullname, position, about', 'required'),
            array('face,full', 'file', 'types'=>'png, jpg, gif', 'allowEmpty' => true,),
            array('about', 'safe'),
			array('face', 'faceValidator'),
			array('full', 'imageTypeValidator'),
            array('sort', 'numerical', 'integerOnly'=>true),
            array('fullname, position', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
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
            self::TYPE_FACE => array(
                'class' => 'common.extensions.image.ImageBehavior',
                'folder' => 'team',
                'attribute' => self::TYPE_FACE,
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
		$criteria=new CDbCriteria;

		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('position',$this->position,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
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
        $criteria->offset = ($currentPage - 1)*self::PAGE_SIZE;
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }

    const TYPE_FACE = 'face';
    const TYPE_IMAGE = 'image';

    const SIZE_IMAGE_WIDTH = 600;
    const SIZE_FACE_WIDTH = 300;
    const SIZE_FACE_HEIGHT = 300;

    public $face;
    public $full;

    public function faceValidator ($attribute, $params) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) {
            if ($this->isNewRecord) {
                $this->addError($attribute, Yii::t('portfolio', 'Изобраение не загружено'));
            } else {
                return false;
            }
        }
        $image = Image::make($file->tempName);
        if (!($image->width == self::SIZE_FACE_WIDTH && $image->height == self::SIZE_FACE_HEIGHT)) {
            $this->addError($attribute, Yii::t('portfolio', 'Выбраны не правильные размеры превью.'));
        }
    }

    public function imageTypeValidator ($attribute, $params) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) {
            if ($this->isNewRecord) {
                $this->addError($attribute, Yii::t('portfolio', 'Изобраение не загружено'));
            } else {
                return false;
            }
        }
        $image = Image::make($file->tempName);;
        if ($image->width < self::SIZE_IMAGE_WIDTH) {
            $this->addError($attribute, Yii::t('portfolio', 'Слишком маленькое изображение.'));
        }
    }



	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
