<?php
/* @var $this ClientsController */
/* @var $visit Visits */
/* @var $visitsProvider CActiveDataProvider */
/* @var $messagesProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    $visit->ip,
);
?>

<h1>Информация о клиенте <?php echo $visit->ip; ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
    'data'=>$visit,
    'attributes'=>array(
        'id',
        'ip',
        'time',
        'referrerUrl',
        'referrerKey',
    ),
));
?>

<h1>Посещения</h1>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => Visits::model()->getGridId(),
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $visitsProvider,
    'columns' => array(
        'time',
        'referrerUrl',
        'referrerKey',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
            'viewButtonUrl' => 'Yii::app()->controller->createUrl("/clients/view",array("id"=>$data->primaryKey))',
        ),
    ),
)); ?>

<h1>Сообщения</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => Messages::model()->getGridId(),
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $messagesProvider,
    'columns' => array(
        'id',
        'name',
        'email',
        'phone',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
        ),
    ),
)); ?>