<?php
/* @var $this ClientsController */
/* @var $model Visits */
/* @var $themes Themes[] */


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
        'ajaxUpdate' => 'sales',
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
        Воронка продаж:
        <div>Оплатившие: <?= isset($sales[Clients::STATUS_PAID]) ? $sales[Clients::STATUS_PAID] : 0 ?></div>
        <div>Вышедшие на
            связь: <?= isset($sales[Clients::STATUS_CONTACTED]) ? $sales[Clients::STATUS_CONTACTED] : 0 ?></div>
        <div>Оставившие
            координаты: <?= isset($sales[Clients::STATUS_RESPONDED]) ? $sales[Clients::STATUS_RESPONDED] : 0 ?></div>
        <div>Зашедшие: <?= isset($sales[Clients::STATUS_NEW]) ? $sales[Clients::STATUS_NEW] : 0 ?></div>
    </div>
</div>