<?php
    /* @var $this VarsController */
    /* @var $model Vars */
?>

<?php
$this->breadcrumbs=array(
	'Фразы'=>array('index'),
	'Добавление',
);
?>

    <h1>Добавление новой фразы</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>