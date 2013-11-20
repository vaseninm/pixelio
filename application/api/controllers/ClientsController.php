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
        $result = $model->save();
        if ($result) {
            $body = "Новый лид на " . Yii::app()->name. ": \n";
            $body .= "\t".$model->getAttributeLabel('id').": " . CHtml::encode($model->id) . "\n";
            $body .= "\t".$model->getAttributeLabel('name').": " . CHtml::encode($model->name) . "\n";
            $body .= "\t".$model->getAttributeLabel('visits').": " . CHtml::encode($model->visits) . "\n";
            $body .= "\t".$model->getAttributeLabel('email').": " . CHtml::encode($model->email) . "\n";
            $body .= "\t".$model->getAttributeLabel('phone').": " . CHtml::encode($model->phone) . "\n";
            $body .= "\t".$model->getAttributeLabel('message').": " . CHtml::encode($model->message) . "\n";
            $body .= "\t".$model->getAttributeLabel('comfortTime').": " . CHtml::encode($model->comfortTime) . "\n";
            $body .= "\t".$model->getAttributeLabel('firstVisit').": " . date('d.m.Y', $model->firstVisit) . "\n";
            $body .= "\t".$model->getAttributeLabel('lastVisit').": " . date('d.m.Y', $model->lastVisit) . "\n";
            $body .= "\t".$model->getAttributeLabel('referrerUrl').": " . CHtml::encode($model->referrerUrl) . "\n";
            $body .= "\t".$model->getAttributeLabel('referrerKey').": " . CHtml::encode($model->referrerKey) . "\n";
            $body .= "С уважением, Ваш уведомитель. \n";
            $model->sendClientInfoToEmail($body, Yii::app()->params->itemAt('adminEmail'));
        }
        $this->answer = array(
            'error' => !$result,
            'errors' => $model->getErrors(),
        );

    }

}