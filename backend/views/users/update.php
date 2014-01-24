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

    <h1>Редактирование пользователя <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>