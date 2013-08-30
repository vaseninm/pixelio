<?php
/* @var $this UsersController */
/* @var $model Users */


$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Users', 'url' => array('index')),
    array('label' => 'Create Users', 'url' => array('create')),
);
?>

    <h1>Manage Users</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'users-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//    'filter' => $model,
    'columns' => array(
        'id',
        'password',
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