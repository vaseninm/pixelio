<?php
/**
 *
 * SiteController class
 *
 */
class SiteController extends CController
{
	public function actionError()
	{
        $error = Yii::app()->errorHandler->error;
        echo CJSON::encode(array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'params' => array(
                'code' => $error['code'],
                'text' => $error['message'],
            ),
        ));
	}
}
