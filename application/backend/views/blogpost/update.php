<?php
/* @var $this BlogPostController */
/* @var $model BlogPosts */
?>

<?php
$this->breadcrumbs=array(
	'Отзывы' => array('index'),
    'Изменение',
);
?>

    <h1>Изменение поста #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>