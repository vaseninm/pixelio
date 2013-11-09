<?php
/* @var $this ClientsController */
/* @var $model Clients */


$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    'Список',
);
?>

    <h1>Список клиентов</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => $model->getGridId(),
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
    'columns' => array(
        'ip',
        'visits',
        'name',
        'email',
        'phone',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
        ),
    ),
)); ?>