<?php
    /* @var $this ThemesController */
    /* @var $model Themes */
?>

<?php
$this->breadcrumbs=array(
	'Themes'=>array('index'),
	'Create',
);
?>

    <h1>Добавление нового Themes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>