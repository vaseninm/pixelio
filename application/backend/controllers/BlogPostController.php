<?php

class BlogPostController extends PxAdminController
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
            array('label' => 'Блог', 'url' => array('index')),
            array('label' => 'Создать пост', 'url' => array('create')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new BlogPosts('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['BlogPosts']))
            $model->attributes = $_GET['BlogPosts'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new BlogPosts;

        $this->performAjaxValidation($model);

        if (isset($_POST['BlogPosts'])) {
            $model->attributes = $_POST['BlogPosts'];
            if ($model->save()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Пост написан удачно.');
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel('BlogPosts', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['BlogPosts'])) {
            $model->attributes = $_POST['BlogPosts'];
            if ($model->save()){
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Пост сохранен удачно.');
                $this->refresh();
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel('BlogPosts', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}