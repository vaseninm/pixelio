<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 02.09.13
 * Time: 1:22
 * To change this template use File | Settings | File Templates.
 */

class PxAdminController extends PxController
{

    public $adminMenu;

    public function init()
    {
        parent::init();
        Yii::app()->clientScript->registerCssFile('/css/bootstrap.css');
        Yii::app()->clientScript->registerCssFile('/css/main.css');
        foreach (Yii::app()->params->itemAt('adminCategories') as $category) {
            $this->adminMenu[] = array(
                'label' => $category['title'],
                'url' => $this->createUrl('/' . $category['controller']),
            );
        }
    }


}