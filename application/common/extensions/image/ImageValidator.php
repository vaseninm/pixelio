<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 06.11.13
 * Time: 8:56
 * To change this template use File | Settings | File Templates.
 */
use Intervention\Image\Image;

class ImageValidator extends CValidator {

    public $width = null;
    public $height = null;

    protected function validateAttribute($model,$attribute)
    {
        $file = CUploadedFile::getInstance($model, $attribute);
        if ($file) {
            $image = Image::make($file->tempName);
            if (isset($this->width)) {
                if (is_array($this->width)) {
                    if (isset($this->width['min']) && $image->width < $this->width['min']) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Минимальная ширина изображения: {min} px', array(
                            '{min}' => $this->width['min'],
                        )));
                    }
                    if (isset($this->width['max']) && $image->width > $this->width['max']) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Максимальная ширина изображения: {max} px', array(
                            '{max}' => $this->width['max'],
                        )));
                    }
                } else {
                    if ($image->width != $this->width) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Ожидается ширина изображения: {size} px', array(
                            '{size}' => $this->width
                        )));
                    }
                }
            }
            if (isset($this->height)) {
                if (is_array($this->height)) {
                    if (isset($this->height['min']) && $image->height < $this->height['min']) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Минимальная высота изображения: {min} px', array(
                            '{min}' => $this->height['min'],
                        )));
                    }
                    if (isset($this->height['max']) && $image->height > $this->height['max']) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Максимальная высота изображения: {max} px', array(
                            '{max}' => $this->height['max'],
                        )));
                    }
                } else {
                    if ($image->height != $this->height) {
                        $this->addError($model, $attribute, Yii::t('portfolio', 'Ожидается высота изображения: {size} px', array(
                            '{size}' => $this->height
                        )));
                    }
                }
            }
        }
    }
}