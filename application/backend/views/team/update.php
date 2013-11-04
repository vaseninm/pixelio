<?php
/* @var $this TeamController */
/* @var $model Team */
?>

<?php
$this->breadcrumbs = array(
    'Команда' => array('index'),
    'Изменение',
);
?>

    <h1>Изменение работника <?php echo CHtml::encode($model->fullname); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>