<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs = array(
    'Пользователи' => array('admin'),
    'Создание пользователя',
);
?>

    <h1>Создание пользователя</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>