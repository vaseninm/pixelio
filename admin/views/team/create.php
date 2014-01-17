<?php
/* @var $this TeamController */
/* @var $model Team */
?>

<?php
$this->breadcrumbs = array(
    'Команда' => array('index'),
    'Добавление работника',
);
?>

    <h1>Добавление нового работника</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>