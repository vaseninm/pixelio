<?php
    /* @var $this FeedbackController */
    /* @var $model Feedback */
?>

<?php
$this->breadcrumbs=array(
    'Отзывы' => array('index'),
    'Добавление',
);
?>

    <h1>Добавление нового Feedback</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>