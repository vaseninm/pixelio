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
            if ($client->status === Clients::STATUS_NEW) {
				$client->status = Clients::STATUS_RESPONDED;	
				$client->save();
			}
            $model->sendClientInfoToEmail();
        }
        $this->answer = array(
            'error' => !$result,
            'errors' => $model->getErrors(),
        );

    }

}