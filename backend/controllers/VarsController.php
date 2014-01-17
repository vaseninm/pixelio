<?php

class VarsController extends PxAdminController
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
            array('label' => 'Фразы', 'url' => array('index')),
            array('label' => 'Добавить фразу', 'url' => array('create')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Vars('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Vars']))
            $model->attributes = $_GET['Vars'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Vars;

        $this->performAjaxValidation($model);

        if (isset($_POST['Vars'])) {
            $model->attributes = $_POST['Vars'];
            switch ($model->type) {
                case Vars::TYPE_IMAGE:
                    $model->file=CUploadedFile::getInstance($model,'file');
                    $name = '/api/uploads/vars/'.substr(md5(rand()), 5, 10).'.'.$model->file->getExtensionName();
                    $model->value = $name;
                    if ($model->validate()) {
                        $model->file->saveAs(Yii::getPathOfAlias('root') . $name);
                    }
                    break;
                case Vars::TYPE_TEXT:
                    $model->value = CHtml::encode($model->value);
                    break;
                case Vars::TYPE_HTML:
                    break;
            }
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel('Vars', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['Vars'])) {
            $model->attributes = $_POST['Vars'];
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
            $model = $this->loadModel('Vars', $id);
            switch ($model->type) {
                case Vars::TYPE_IMAGE:
                    @unlink(Yii::getPathOfAlias('root') . $model->value);
                    break;
                case Vars::TYPE_TEXT:
                    break;
                case Vars::TYPE_HTML:
                    break;
            }
            $model->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}