<?php
    /* @var $this DomainsController */
    /* @var $model Domains */
?>

<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	'Create',
);
?>

    <h1>Добавление нового Domains</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>