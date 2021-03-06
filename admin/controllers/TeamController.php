<?php

class TeamController extends PxAdminController
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

    public function actions()
    {
        return array(
            'sortableTeam' => array(
                'class' => 'backend.extensions.sortable.SortableAction',
                'model' => Team::model(),
                'column' => 'sort',
            ),
        );
    }

    protected function beforeAction($action)
    {
        $return = parent::beforeAction($action);
        $this->menu = array(
            array('label' => 'Команда', 'url' => array('index')),
            array('label' => 'Создать работника', 'url' => array('create')),
        );
        return $return;
    }

    public function actionIndex()
    {
        $model = new Team('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Team']))
            $model->attributes = $_GET['Team'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Team;

        $this->performAjaxValidation($model);

        if (isset($_POST['Team'])) {
            $model->attributes = $_POST['Team'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel('Team', $id);

        $this->performAjaxValidation($model);

        if (isset($_POST['Team'])) {
            $model->attributes = $_POST['Team'];
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
            $this->loadModel('Team', $id)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}