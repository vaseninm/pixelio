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
        $model->parseRefferer($this->request->referrer, $this->request->url);
        $error = !$model->save();

        $this->answer = array(
            'error' => $error,
            'isNew' => $model->isNewRecord,
            'visits' => $model->visits,
            'referrer' => 3,
        );
    }

    public function actionLeftContact() {
        $model = Clients::model()->findByAttributes(array('ip' => Yii::app()->request->userHostAddress));
        if (!$model) {
            $model = new Clients();
        }
        if (isset($this->request->name)) $model->name = $this->request->name;
        if (isset($this->request->email)) $model->email = $this->request->email;
        if (isset($this->request->message)) $model->message = $this->request->message;
        if (isset($this->request->phone)) $model->phone = $this->request->phone;
        if (isset($this->request->comfortTime)) $model->comfortTime = $this->request->comfortTime;
        $this->answer = array(
            'error' => !$model->save(),
            'errors' => $model->getErrors(),
        );
    }

}