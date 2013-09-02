<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 02.09.13
 * Time: 1:22
 * To change this template use File | Settings | File Templates.
 */

class PxController extends EController {

    public $title;

    public function init() {
        Yii::app()->clientScript->registerCoreScript('jquery');
//        Yii::app()->clientScript->registerCoreScript('jquery.ui');


    }


}