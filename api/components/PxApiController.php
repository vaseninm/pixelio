<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 02.09.13
 * Time: 1:22
 * To change this template use File | Settings | File Templates.
 */

class PxApiController extends CController
{

    public $request;
    public $answer;

    protected function beforeAction($action)
    {
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: " . Yii::app()->params->itemAt('frontendUrl'));
        header("Access-Control-Allow-Headers: Content-Type");
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') Yii::app()->end('200');
        $this->request = CJSON::decode(trim(file_get_contents('php://input')), false);
        $this->request = isset($this->request) ? $this->request : array();
        return parent::beforeAction($action);
    }

    protected function afterAction($action)
    {
        echo CJSON::encode(array(
            'controller' => $this->id,
            'action' => $action->id,
            'params' => is_array($this->answer) ? $this->answer : array(),
        ));
    }

}