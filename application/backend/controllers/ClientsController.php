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
        $model = new Clients('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Clients'])) {
            $model->attributes = $_GET['Clients'];

        }
        $allVisiters = Clients::model()->count();
        $namedVisiters = Clients::model()->count('`name` IS NOT NULL AND (`email` IS NOT NULL OR `phone` IS NOT NULL)');
        $this->render('index', array(
            'model' => $model,
            'allVisiters' => $allVisiters,
            'namedVisiters' => $namedVisiters,
        ));
    }

    public function actionView($id) {
        $model = $this->loadModel('Clients', $id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

}