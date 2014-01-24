<?php
/* @var $this TeamController */
/* @var $model Team */
?>

<?php
$this->breadcrumbs = array(
    'Портфолио' => array('index'),
    'Изменение',
);
?>

    <h1>Изменение работы <?php echo CHtml::encode($model->title); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>