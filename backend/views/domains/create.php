<?php
    /* @var $this DomainsController */
    /* @var $model Domains */
?>

<?php
$this->breadcrumbs=array(
	'Домены'=>array('index'),
	'Добавление домена',
);
?>

    <h1>Добавление нового домена</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>