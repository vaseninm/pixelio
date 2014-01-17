<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    'Список',
);
?>

<h1>Список клиентов</h1>

<div id="client-list">
    <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'id' => $model->getGridId(),
        'type' => TbHtml::GRID_TYPE_BORDERED,
        'dataProvider' => $model->search(),
        'filter' => $model,
        'ajaxUpdate' => 'sales,conversion',
        'columns' => array(
//        'id',
            'ip',
            'status',
            array(
                'name' => 'theme_id',
                'value' => '$data->theme->name',
                'filter' => Themes::getAll($model->domain_id),
            ),
            array(
                'name' => 'domain_id',
                'value' => '$data->domain->domain',
                'filter' => Domains::getActive(),
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{view}',
            ),
        ),
    )); ?>

    <div id="sales">
        <b>Воронка продаж:</b>
        <div>Оплатившие: <?= $sales[Clients::STATUS_PAID] ?></div>
        <div>Вышедшие на связь: <?= $sales[Clients::STATUS_CONTACTED] ?></div>
        <div>Оставившие координаты: <?= $sales[Clients::STATUS_RESPONDED] ?></div>
        <div>Зашедшие: <?= $sales[Clients::STATUS_NEW] ?></div>
    </div>
	<p></p>
    <div id="conversion">
        <b>Конверсия:</b> <?= $conversion ?>%
    </div>
</div>