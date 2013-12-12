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
        'id',
        'ip',
        'status',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
        ),
    ),
)); ?>

<div>
    Воронка продаж:
   <ul>
    <?php foreach($stats as $status): ?>
        <li><?= $status->status ?>: <?= $status->count ?></li>
    <?php endforeach; ?>
   </ul>
</div>