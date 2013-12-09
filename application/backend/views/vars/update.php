<?php
    /* @var $this VarsController */
    /* @var $model Vars */
?>

<?php
$this->breadcrumbs=array(
	'Фразы'=>array('index'),
	'Изменение',
);
?>

    <h1>Изменение фразы <?php echo CHtml::encode($model->name); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>