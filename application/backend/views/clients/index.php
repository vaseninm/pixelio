<?php
/* @var $this ClientsController */
/* @var $model Visits */


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
        'time',
        'referrerUrl',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
        ),
    ),
)); ?>

<div>
    Конверсия: <?php echo round(($namedVisiters*100/$allVisiters),2); ?>%
</div>