<?php

class BlogCommentController extends PxAdminController
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
            array('label' => 'Блог', 'url' => array('/blogComment/index')),
        );
        return $return;
    }

    public function actionIndex()
    {
//        $post = BlogPosts::model()->findByPk($post);
//        if (! $post) throw new CHttpException(404);

        $model = new BlogComments('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['BlogComments']))
            $model->attributes = $_GET['BlogComments'];

//        $model->post_id = $post->id;

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
//        $model = new BlogComments;
//
//        $this->performAjaxValidation($model);
//
//        if (isset($_POST['BlogComments'])) {
//            $model->attributes = $_POST['BlogComments'];
//            if ($model->save()) {
//                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Коммент написан удачно.');
//                $this->redirect(array('index'));
//            }
//        }
//
//        $this->render('create', array(
//            'model' => $model,
//        ));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel('BlogComments', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['BlogComments'])) {
            $model->attributes = $_POST['BlogComments'];
            if ($model->save()){
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Коммент сохранен удачно.');
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
            $this->loadModel('BlogComments', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}