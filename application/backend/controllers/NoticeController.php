<?php

class NoticeController extends PxAdminController
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
array('label' => 'Notice', 'url' => array('index')),
array('label' => 'Создать Notice', 'url' => array('create')),
);
return $return;
}

public function actionIndex()
{
$model=new Notice('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Notice']))
$model->attributes=$_GET['Notice'];

$this->render('index',array(
'model'=>$model,
));
}

public function actionCreate()
{
$model=new Notice;

$this->performAjaxValidation($model);

if(isset($_POST['Notice']))
{
$model->attributes=$_POST['Notice'];
if($model->save())
$this->redirect(array('index'));
}

$this->render('create',array(
'model'=>$model,
));
}


public function actionUpdate($id)
{
$model=$this->loadModel('Notice', $id);

$this->performAjaxValidation($model);

if(isset($_POST['Notice']))
{
$model->attributes=$_POST['Notice'];
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
$this->loadModel('Notice', $id)->delete();

if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

}