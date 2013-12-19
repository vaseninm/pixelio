<?php
    /* @var $this ThemesController */
    /* @var $model Themes */
?>

<?php
$this->breadcrumbs=array(
	'Themes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>

    <h1>Изменение Themes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>