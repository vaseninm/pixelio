<?php
    /* @var $this NoticeController */
    /* @var $model Notice */
?>

<?php
$this->breadcrumbs=array(
	'Notices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

    <h1>Изменение Notice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>