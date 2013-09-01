<?php

class PortfolioController extends EController
{

    public $defaultAction = 'works';

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

    public function actionWorks()
    {
        $model = new PfWorks('search');
        $model->unsetAttributes();
        if (isset($_GET['PfWorks'])) {
            $model->attributes = $_GET['PfWorks'];
        }
        $this->render('works', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $works = new PfWorks;

        $this->performAjaxValidation($works);

        if (isset($_POST['PfWorks'])) {
            $works->attributes = $_POST['PfWorks'];
            $works->status = PfWorks::STATUS_UNAPPROVED;
            if ($works->save()) {
                $this->redirect(array('view', 'id' => $works->id));
            }
        }

        $this->render('create', array(
            'works' => $works,
        ));
    }


    public function actionUpdate($id)
    {
        $works = $this->loadModel('PfWorks', $id);
        $pages = new PfPages();

        $this->performAjaxValidation($works);
        $this->performAjaxValidation($pages);


        if (isset($_POST['PfWorks'])) {
            $works->attributes = $_POST['PfWorks'];
            if ($works->save()) {
                $this->refresh();
            }
        } elseif (isset($_POST['PfPages'])) {
            $pages->attributes = $_POST['PfPages'];
            $pages->work_id = $works->id;
            if ($pages->save()) {
                $this->refresh();
            }
        }

        $this->render('update', array(
            'works' => $works,
            'pages' => $pages,
        ));
    }


    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel('PfWorks', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}