<?php
use Intervention\Image\Image;

class PfCarousel extends CActiveRecord
{
    const TYPE_IMAGE = 'carousel';

    const SIZE_IMAGE_WIDTH = 750;
    const SIZE_IMAGE_HEIGHT = 367;

    public $image;

    public function tableName()
	{
		return 'pfCarousel';
	}

	public function rules()
	{
		return array(
            array('image', 'file', 'types'=>'png, jpg, gif', 'allowEmpty' => !$this->isNewRecord),
            array('image', 'imageValidator'),
			array('work_id', 'numerical', 'integerOnly'=>true),
			array('id, work_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'work' => array(self::BELONGS_TO, 'PfWorks', 'work_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'work_id' => 'Work',
		);
	}

    public function imageValidator ($attribute, $params) {
        $file = CUploadedFile::getInstance($this, $attribute);
        if (!$file) return false;
        $image = Image::make($file->tempName);
        if (!($image->width == self::SIZE_IMAGE_WIDTH && $image->height == self::SIZE_IMAGE_HEIGHT)) {
            $this->addError($attribute, Yii::t('portfolio', 'Выбраны не правильные размеры превью.'));
        }
    }

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('work_id',$this->work_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    protected function getPathToImages(){
        return Yii::getPathOfAlias('root.api.uploads.carousels');
    }

    public function getImageUrl($type = self::TYPE_IMAGE) {
        return Yii::app()->params->itemAt('apiUrl') . "/uploads/carousels/{$type}-{$this->id}.png";
    }

    protected function saveImages(){
        $image = CUploadedFile::getInstance($this, 'image');
        if ($image instanceof CUploadedFile){
            Image::make($image->tempName)->save($this->getPathToImages() . "/". self::TYPE_IMAGE ."-{$this->id}.png");
        }
    }

    protected function deleteImages() {
        foreach (array(self::TYPE_IMAGE) as $type) {
            if (is_file($this->getPathToImages() . "/{$type}-{$this->id}.png")) {
                @unlink($this->getPathToImages() . "/{$type}-{$this->id}.png");
            }
        }
    }

    protected function afterDelete() {
        $this->deleteImages();
        parent::afterDelete();
    }

    protected function afterSave() {
        parent::afterSave();
        $this->saveImages();
    }
}
