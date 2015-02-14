<?php
/* @var $this BlogCommentController */
/* @var $model BlogComments */
?>

<?php
$this->breadcrumbs=array(
    'Коменты' => array('index'),
    'Добавление',
);
?>

    <h1>Добавление нового Поста</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>