<?php
/* @var $this UsersController */
/* @var $model Users */


$this->breadcrumbs = array(
    'Пользователи'
);

?>

    <h1>Список пользователей</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'users-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//    'filter' => $model,
    'columns' => array(
        'id',
        'username',
        'email',
        'role',
        'createTime:date',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
        ),
    ),
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>
