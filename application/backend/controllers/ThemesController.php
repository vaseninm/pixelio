<?php

class ThemesController extends PxAdminController
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

protected function beforeAction($action) {
$return = parent::beforeAction($action);
$this->menu = array(
array('label' => 'Themes', 'url' => array('index')),
array('label' => 'Создать Themes', 'url' => array('create')),
);
return $return;
}

public function actionIndex()
{
$model=new Themes('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Themes']))
$model->attributes=$_GET['Themes'];

$this->render('index',array(
'model'=>$model,
));
}

public function actionCreate()
{
$model=new Themes;

$this->performAjaxValidation($model);

if(isset($_POST['Themes']))
{
$model->attributes=$_POST['Themes'];
if($model->save())
$this->redirect(array('index'));
}

$this->render('create',array(
'model'=>$model,
));
}


public function actionUpdate($id)
{
$model=$this->loadModel('Themes', $id);

$this->performAjaxValidation($model);

if(isset($_POST['Themes']))
{
$model->attributes=$_POST['Themes'];
if($model->save())
$this->refresh();
}

$this->render('update',array(
'model'=>$model,
));
}

public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
$this->loadModel('Themes', $id)->delete();

if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

}