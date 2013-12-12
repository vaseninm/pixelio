<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class ClientsController extends PxApiController {

    public function actionLeftContact() {
        $client = Clients::you();
        $model = new Messages();
        $model->client_id = $client->id;
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
            $body .= "\t".$model->getAttributeLabel('email').": " . CHtml::encode($model->email) . "\n";
            $body .= "\t".$model->getAttributeLabel('phone').": " . CHtml::encode($model->phone) . "\n";
            $body .= "\t".$model->getAttributeLabel('message').": " . CHtml::encode($model->message) . "\n";
            $body .= "\t".$model->getAttributeLabel('comfortTime').": " . CHtml::encode($model->comfortTime) . "\n";
            $body .= "\t".$client->getAttributeLabel('ip').": " . CHtml::encode($client->ip) . "\n";
            $body .= "С уважением, Ваш уведомитель. \n";
            $model->sendClientInfoToEmail($body, Yii::app()->params->itemAt('adminEmail'));
        }
        $this->answer = array(
            'error' => !$result,
            'errors' => $model->getErrors(),
        );

    }

}