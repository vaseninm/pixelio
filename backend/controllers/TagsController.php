<?php

class TagsController extends PxAdminController
{

    public $defaultAction = 'admin';

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
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

    protected function beforeAction($action) {
        $return = parent::beforeAction($action);
        $this->menu = array(
            array('label' => 'Работы', 'url' => array('/portfolio/works')),
            array('label' => 'Создать работу', 'url' => array('/portfolio/create')),
            array('label' => 'Управление тегами', 'url' => array('/tags/admin')),
            array('label' => 'Создать тег', 'url' => array('/tags/create')),
        );
        return $return;
    }

    public function actionAdmin()
    {
        $model = new PfTags('search');
        $model->unsetAttributes();
        if (isset($_GET['PfTags']))
            $model->attributes = $_GET['PfTags'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new PfTags;

         $this->performAjaxValidation($model);

        if (isset($_POST['PfTags'])) {
            $model->attributes = $_POST['PfTags'];
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel('PfTags', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['PfTags'])) {
            $model->attributes = $_POST['PfTags'];
            if ($model->save())
                $this->refresh();
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel('PfTags', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }
}