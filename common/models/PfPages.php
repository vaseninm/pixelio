<?php
use Intervention\Image\Image;
/**
 * This is the model class for table "pfPages".
 *
 * The followings are the available columns in table 'pfPages':
 * @property integer $id
 * @property string $title
 * @property integer $position
 * @property integer $work_id
 *
 * The followings are the available model relations:
 * @property PfWorks $work
 */
class PfPages extends EActiveRecord
{

    const TYPE_FACE = 'face';
    const TYPE_IMAGE = 'image';
    const TYPE_FULL = 'full';

    const SIZE_IMAGE_WIDTH = 601;
    const SIZE_FACE_WIDTH = 140;
    const SIZE_FACE_HEIGHT = 140;

    public $face;
    public $full;


    public function tableName()
	{
		return 'pfPages';
	}

	public function rules()
	{
		return array(
            array('title,work_id','required'),
            array('face,full', 'file', 'types'=>'png, jpg, gif', 'allowEmpty' => false,),
            array('face', 'faceValidator'),
            array('full', 'imageTypeFilter'),
            array('position, work_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('title', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'work' => array(self::BELONGS_TO, 'PfWorks', 'work_id'),
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
			'face' => 'Превью',
            'full' => 'Изображение',
		);
	}

	public function search($work)
	{
		$criteria=new CDbCriteria;

		$criteria->compare('title',$this->title,true);
		$criteria->compare('work_id',$work);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function faceValidator ($attribute, $params) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) return false;
        $image = Image::make($file->tempName);
        if (!($image->width == self::SIZE_FACE_WIDTH && $image->height == self::SIZE_FACE_HEIGHT)) {
            $this->addError($attribute, Yii::t('portfolio', 'Выбраны не правильные размеры превью.'));
        }
    }

    public function imageTypeFilter ($attribute, $params) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) return false;
        $image = Image::make($file->tempName);;
        if ($image->width < self::SIZE_IMAGE_WIDTH) {
            $this->addError($attribute, Yii::t('portfolio', 'Слишком маленькое изображение.'));
        }
    }

    public function isFace() {
        return ($this->work->face_id == $this->id);
    }

    public function getImageUrl($type = self::TYPE_IMAGE) {
        return "/uploads/works/{$type}-{$this->id}.png";
    }

    protected function deleteImages() {
        foreach (array(self::TYPE_FACE, self::TYPE_IMAGE, self::TYPE_FULL) as $type) {
            if (is_file($this->getPathToImages() . "/{$type}-{$this->id}.png")) {
                @unlink($this->getPathToImages() . "/{$type}-{$this->id}.png");
            }
        }
    }

    protected function getPathToImages(){
        return Yii::getPathOfAlias('api.www.uploads.works');
    }

    protected function afterDelete() {
        $this->deleteImages();
        parent::afterDelete();
    }

    protected function saveImages(){
        $facePath = CUploadedFile::getInstance($this, 'face')->tempName;
        Image::make($facePath)->save($this->getPathToImages() . "/". self::TYPE_FACE ."-{$this->id}.png");

        $imagePath = CUploadedFile::getInstance($this, 'full')->tempName;
        Image::make($imagePath)->widen(self::SIZE_IMAGE_WIDTH)->save($this->getPathToImages() . "/". self::TYPE_IMAGE ."-{$this->id}.png");
        Image::make($imagePath)->save($this->getPathToImages() . "/". self::TYPE_FULL ."-{$this->id}.png");
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
