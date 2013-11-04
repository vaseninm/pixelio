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
		));
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

    public function getImageUrl($type = self::TYPE_IMAGE) {
        return Yii::app()->params->itemAt('apiUrl') . "/uploads/team/{$type}-{$this->id}.png";
    }

    protected function deleteImages() {
        foreach (array(self::TYPE_FACE, self::TYPE_IMAGE) as $type) {
            if (is_file($this->getPathToImages() . "/{$type}-{$this->id}.png")) {
                @unlink($this->getPathToImages() . "/{$type}-{$this->id}.png");
            }
        }
    }

    protected function getPathToImages(){
        return Yii::getPathOfAlias('root.api.uploads.team');
    }

    protected function afterDelete() {
        $this->deleteImages();
        parent::afterDelete();
    }

    protected function saveImages(){
        $face = CUploadedFile::getInstance($this, 'face');
        if ($face) {
            Image::make($face->tempName)->save($this->getPathToImages() . "/". self::TYPE_FACE ."-{$this->id}.png");
        }
        $image = CUploadedFile::getInstance($this, 'full');
        if ($image) {
            Image::make($image->tempName)->resize(self::SIZE_IMAGE_WIDTH, null, true, false)->save($this->getPathToImages() . "/". self::TYPE_IMAGE ."-{$this->id}.png");
        }
    }

    protected function afterSave() {
        parent::afterSave();
        $this->saveImages();
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
