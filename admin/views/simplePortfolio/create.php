<?php
/* @var $this TeamController */
/* @var $model Team */
?>

<?php
$this->breadcrumbs = array(
    'Портфолио' => array('index'),
    'Добавление работу',
);
?>

    <h1>Добавление новой работы</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>