<?php

class ClientsController extends PxAdminController
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
            array('label' => 'Клиенты', 'url' => array('index')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Visits('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Clients'])) {
            $model->attributes = $_GET['Clients'];

        }
        $criteria = new CDbCriteria();
        $criteria->together = true;
        $criteria->group = 'ip';
        $allVisiters = Visits::model()->count($criteria);
        $criteria->with = 'messages';
        $criteria->having =  new CDbExpression('COUNT(messages.id) > 0');
        $namedVisiters = Visits::model()->count($criteria);
        $this->render('index', array(
            'model' => $model,
            'allVisiters' => $allVisiters,
            'namedVisiters' => $namedVisiters,
        ));
    }

    public function actionView($id) {

        $visit = $this->loadModel('Visits', $id);
        $visitsCriteria = new CDbCriteria();
        $visitsCriteria->compare('ip', $visit->ip);
        $visitsProvider = new CActiveDataProvider('Visits', array('criteria' => $visitsCriteria));
        $messagesCriteria = new CDbCriteria();
        $messagesCriteria->with = array('visit');
        $messagesCriteria->compare('`visit`.`ip`', $visit->ip);
        $messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $messagesCriteria));
        $this->render('view', array(
            'visit' => $visit,
            'visitsProvider' => $visitsProvider,
            'messagesProvider' => $messagesProvider,
        ));
    }

}