<?php

class MessagesController extends PxAdminController
{

    public function filters()
    {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'roles' => array(Users::ROLE_ADMIN),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    protected function beforeAction($action)
    {
        $return = parent::beforeAction($action);
        $this->menu = array(
            array('label' => 'Сообщения', 'url' => array('index')),
            array('label' => 'Создать пользователи', 'url' => array('create')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Messages('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Messages']))
            $model->attributes = $_GET['Messages'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionView($id) {
        $message = $this->loadModel('Messages', $id);
        $visitsCriteria = new CDbCriteria();
        $visitsCriteria->compare('ip', $message->visit->ip);
        $visitsProvider = new CActiveDataProvider('Visits', array('criteria' => $visitsCriteria));
        $messagesCriteria = new CDbCriteria();
        $messagesCriteria->with = array('visit');
        $messagesCriteria->compare('`visit`.`ip`', $visit->ip);
        $messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $messagesCriteria));
        $this->render('view', array(
            'message' => $message,
            'visitsProvider' => $visitsProvider,
            'messagesProvider' => $messagesProvider,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel('Messages', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}