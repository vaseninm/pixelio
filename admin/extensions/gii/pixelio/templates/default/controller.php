<?php
/**
 * This is the template for generating a controller class file for CRUD feature.
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>

class <?php echo $this->controllerClass; ?> extends <?php echo $this->baseControllerClass . "\n"; ?>
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
array('label' => '<?php echo $this->modelClass; ?>', 'url' => array('index')),
array('label' => 'Создать <?php echo $this->modelClass; ?>', 'url' => array('create')),
);
return $return;
}

public function actionIndex()
{
$model=new <?php echo $this->modelClass; ?>('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['<?php echo $this->modelClass; ?>']))
$model->attributes=$_GET['<?php echo $this->modelClass; ?>'];

$this->render('index',array(
'model'=>$model,
));
}

public function actionCreate()
{
$model=new <?php echo $this->modelClass; ?>;

$this->performAjaxValidation($model);

if(isset($_POST['<?php echo $this->modelClass; ?>']))
{
$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
if($model->save())
$this->redirect(array('index'));
}

$this->render('create',array(
'model'=>$model,
));
}


public function actionUpdate($id)
{
$model=$this->loadModel('<?php echo $this->modelClass; ?>', $id);

$this->performAjaxValidation($model);

if(isset($_POST['<?php echo $this->modelClass; ?>']))
{
$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
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
$this->loadModel('<?php echo $this->modelClass; ?>', $id)->delete();

if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

}