<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 06.11.13
 * Time: 8:56
 * To change this template use File | Settings | File Templates.
 */

use Intervention\Image\Image;

class ImageBehavior extends CActiveRecordBehavior {

    public $folder = 'images';
    public $types = array();
    public $attribute = NULL;
    public $path = 'uploads';

    public function getImageUrl($type) {
        if (!isset($this->types[$type])) throw new CHttpException(500, 'Незаданный тип изображения.');
        return Yii::app()->params->itemAt('apiUrl') . "/" . Yii::getPathOfAlias($this->path) . "/{$this->folder}/{$type}-{$this->owner->id}.png";
    }

    protected function deleteImages() {
        foreach (array_keys($this->types) as $type) {
            if (is_file($this->getPathToImages() . "/{$type}-{$this->id}.png")) {
                @unlink($this->getPathToImages() . "/{$type}-{$this->id}.png");
            }
        }
    }

    protected function getPathToImages(){
        return Yii::getPathOfAlias('root.api') . PATH_SEPARATOR .  Yii::getPathOfAlias($this->path) . PATH_SEPARATOR . $this->folder;
    }

    protected function afterDelete($event) {
        $this->deleteImages();
        parent::afterDelete($event);
    }

    protected function saveImages(){
        foreach ($this->types as $type => $params) {
            $image = CUploadedFile::getInstance($this->owner, $this->attribute);
            if ($image) {
                $img = Image::make($image->tempName);
                if (isset($params['resize'])) {
                    $img->resize($params['resize']['width'], $params['resize']['height'], $params['resize']['ratio'], $params['resize']['upsize']);
                }
                if (isset($params['crop'])) {
                    $img->crop($params['crop']['width'], $params['crop']['height'], $params['crop']['x'], $params['crop']['y']);
                }
                $img->save($this->getPathToImages() . "/{$type}-{$this->owner->id}.png");
            }
        }

        $image = CUploadedFile::getInstance($this->owner, 'full');
        if ($image) {
            Image::make($image->tempName)->save($this->getPathToImages() . "/". self::TYPE_IMAGE ."-{$this->id}.png");
        }
    }

    protected function afterSave($event) {
        parent::afterSave($event);
        $this->saveImages();
    }

}