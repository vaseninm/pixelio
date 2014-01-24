<?php
    /* @var $this ThemesController */
    /* @var $model Themes */
?>

<?php
$this->breadcrumbs=array(
	'Темы'=>array('index'),
	'Добавление темы',
);
?>

    <h1>Добавление новой темы</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>