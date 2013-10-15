<?php

class PfCarouselController extends PxAdminController
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
array('label' => 'PfCarousel', 'url' => array('index')),
array('label' => 'Создать PfCarousel', 'url' => array('create')),
);
return $return;
}

public function actionIndex()
{
$model=new PfCarousel('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['PfCarousel']))
$model->attributes=$_GET['PfCarousel'];

$this->render('index',array(
'model'=>$model,
));
}

public function actionCreate()
{
$model=new PfCarousel;

$this->performAjaxValidation($model);

if(isset($_POST['PfCarousel']))
{
$model->attributes=$_POST['PfCarousel'];
if($model->save())
$this->redirect(array('index'));
}

$this->render('create',array(
'model'=>$model,
));
}


public function actionUpdate($id)
{
$model=$this->loadModel('PfCarousel', $id);

$this->performAjaxValidation($model);

if(isset($_POST['PfCarousel']))
{
$model->attributes=$_POST['PfCarousel'];
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
$this->loadModel('PfCarousel', $id)->delete();

if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

}