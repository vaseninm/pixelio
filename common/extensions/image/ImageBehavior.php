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
        return Yii::app()->params->itemAt('apiUrl') . "/" . str_replace('.', '/', $this->path) . "/{$this->folder}/{$type}-{$this->owner->id}.png";
    }

    public function getUrl($type) {
        return $this->getImageUrl($type);
    }

    public function afterDelete($event) {
        $this->deleteImages();
        parent::afterDelete($event);
    }

    public function afterSave($event) {
        $this->saveImages();
        parent::afterSave($event);
    }

    protected function saveImages(){
        foreach ($this->types as $type => $params) {
            $image = CUploadedFile::getInstance($this->owner, $this->attribute);
            if ($image) {
                $img = Image::make($image->tempName);
                if (isset($params['crop'])) {
                    $width = isset($params['crop']['width']) ? $params['crop']['width'] : NULL;
                    $height = isset($params['crop']['height']) ? $params['crop']['height'] : NULL;
                    $x = isset($params['crop']['x']) ? $params['crop']['x'] : NULL;
                    $y = isset($params['crop']['y']) ? $params['crop']['y'] : NULL;
                    $img->crop($width, $height, $x, $y);
                }
                if (isset($params['resize'])) {
                    $width = isset($params['resize']['width']) ? $params['resize']['width'] : NULL;
                    $height = isset($params['resize']['height']) ? $params['resize']['height'] : NULL;
                    $ratio = isset($params['resize']['ratio']) ? $params['resize']['ratio'] : NULL;
                    $upsize = isset($params['resize']['upsize']) ? $params['resize']['upsize'] : NULL;
                    $img->resize($width, $height, $ratio, $upsize);
                }
                if (is_dir(!$this->getPathToImages())) mkdir($this->getPathToImages());
                $img->save($this->getPathToImages() . "/{$type}-{$this->owner->id}.png");
            }
        }
    }

    protected function deleteImages() {
        foreach (array_keys($this->types) as $type) {
            if (is_file($this->getPathToImages() . "/{$type}-{$this->owner->id}.png")) {
                @unlink($this->getPathToImages() . "/{$type}-{$this->owner->id}.png");
            }
        }
    }

    protected function getPathToImages(){
        return Yii::getPathOfAlias('root.api.'.$this->path) . DIRECTORY_SEPARATOR . $this->folder;
    }


}