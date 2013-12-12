<?php

class ClientsController extends PxAdminController
{

    public $count;

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
            array('label' => 'Клиенты', 'url' => array('index')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Clients('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Clients'])) {
            $model->attributes = $_GET['Clients'];
        }
        $criteria = new CDbCriteria();
        $criteria->group = 'status';
        $criteria->select = 'COUNT(id) as count, status';
        $stats = Clients::model()->findAll($criteria);
        $this->render('index', array(
            'model' => $model,
            'stats' => $stats,
        ));
    }

    public function actionView($id) {

        $client = $this->loadModel('Clients', $id);
        $visitsCriteria = new CDbCriteria();
        $visitsCriteria->compare('client_id', $client->id);
        $visitsProvider = new CActiveDataProvider('Visits', array('criteria' => $visitsCriteria));
        $messagesCriteria = new CDbCriteria();
        $messagesCriteria->compare('client_id', $client->id);
        $messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $messagesCriteria));
        $this->render('view', array(
            'client' => $client,
            'visitsProvider' => $visitsProvider,
            'messagesProvider' => $messagesProvider,
        ));
    }

    public function actionMessage($id) {
        $visit = $this->loadModel('Messages', $id);
        $this->render('message', array(
            'visit' => $visit,
        ));
    }

}