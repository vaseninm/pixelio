<?php
    /* @var $this FeedbackController */
    /* @var $model Feedback */
?>

<?php
$this->breadcrumbs=array(
	'Отзывы' => array('index'),
    'Изменение',
);
?>

    <h1>Изменение отзыва #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>