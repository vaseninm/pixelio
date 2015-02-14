<?php
/* @var $this BlogCommentController */
/* @var $model BlogComments */
?>

<?php
$this->breadcrumbs=array(
	'Коменты' => array('index'),
    'Изменение',
);
?>

    <h1>Изменение поста #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>