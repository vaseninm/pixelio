<?php
    /* @var $this PhrasesController */
    /* @var $model Phrases */
?>

<?php
$this->breadcrumbs=array(
	'Фразы'=>array('index'),
	'Добавление',
);
?>

    <h1>Добавление новой фразы</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>