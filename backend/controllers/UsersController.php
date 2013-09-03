<?php

class UsersController extends PxAdminController
{

    public $defaultAction = 'admin';

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

    protected function beforeAction($action) {
        $return = parent::beforeAction($action);
        $this->menu = array(
            array('label' => 'Пользователи', 'url' => array('admin')),
            array('label' => 'Создать пользователя', 'url' => array('create')),
        );
        return $return;
    }

    public function actionCreate()
    {
        $model = new Users;

        $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            $model->password = CPasswordHelper::hashPassword($model->password);

            if ($model->save()){
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Пользователь удачно добавлен.');
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel('Users', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if (!empty($model->password)) {
                $model->password = CPasswordHelper::hashPassword($model->password);
            } else {
                unset($model->password);
            }
            if ($model->save()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Пользователь удачно изменен.');
                $this->refresh();
            }
        }

        $model->password = '';

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel('Users', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionAdmin()
    {
        $model = new Users('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Users']))
            $model->attributes = $_GET['Users'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}