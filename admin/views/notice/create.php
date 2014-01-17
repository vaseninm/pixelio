<?php
    /* @var $this NoticeController */
    /* @var $model Notice */
?>

<?php
$this->breadcrumbs=array(
	'Уведомления'=>array('index'),
	'Добавление получателя',
);
?>

    <h1>Добавление получателя</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>