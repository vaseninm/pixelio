<?php
    /* @var $this NoticeController */
    /* @var $model Notice */
?>

<?php
$this->breadcrumbs=array(
	'Notices'=>array('index'),
	'Create',
);
?>

    <h1>Добавление нового Notice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>