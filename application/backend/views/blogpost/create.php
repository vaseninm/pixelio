<?php
/* @var $this BlogPostController */
/* @var $model BlogPosts */
?>

<?php
$this->breadcrumbs=array(
    'Пост' => array('index'),
    'Добавление',
);
?>

    <h1>Добавление нового Поста</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>