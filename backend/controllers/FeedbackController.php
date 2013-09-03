<?php

class FeedbackController extends PxAdminController
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
            array('label' => 'Отзывы', 'url' => array('index')),
            array('label' => 'Создать отзыв', 'url' => array('create')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Feedback('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Feedback']))
            $model->attributes = $_GET['Feedback'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Feedback;

        $this->performAjaxValidation($model);

        if (isset($_POST['Feedback'])) {
            $model->attributes = $_POST['Feedback'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel('Feedback', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['Feedback'])) {
            $model->attributes = $_POST['Feedback'];
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
            $this->loadModel('Feedback', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}