<?php
/* @var $this MessagesController */
/* @var $message Messages */
/* @var $visitsProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    CHtml::encode($message->name),
);
?>

    <h1>Информация о клиенте <?php echo CHtml::encode($message->name); ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
    'data' => $message,
    'attributes' => array(
        'visit.ip',
        'name',
        'phone',
        'comfortTime',
        'email',
        'message',
        'visit.referrerUrl',
        'visit.referrerKey',
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

    <h1>Все сообщения</h1>

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