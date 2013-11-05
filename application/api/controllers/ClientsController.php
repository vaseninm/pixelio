<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class ClientsController extends PxApiController {

    public function actionRegister() {
        $model = Clients::model()->findByAttributes(array('ip' => Yii::app()->request->userHostAddress));
        if (!$model) {
            $model = new Clients();
        }
//        $model->lastVisit = time();
        $model->save();
    }

    public function actionLeftContact() {
        $model = Clients::model()->findByAttributes(array('ip' => Yii::app()->request->userHostAddress));
        if (!$model) {
            $model = new Clients();
        }
        $model->name = $this->request->name;
        $model->email = $this->request->email;
        $model->message = $this->request->message;
        $model->save();
    }

    public function actionAskCallback() {
        $model = Clients::model()->findByAttributes(array('ip' => Yii::app()->request->userHostAddress));
        if (!$model) {
            $model = new Clients();
        }
        $model->name = $this->request->name;
        $model->phone = $this->request->phone;
        $model->comfortTime = $this->request->comfortTime;
        $model->save();
    }
}