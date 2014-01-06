<?php
/* @var $this ClientsController */
/* @var $client Clients */
/* @var $visitsProvider CActiveDataProvider */
/* @var $messagesProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    $client->ip,
);
?>

<h1>Информация о клиенте <?php echo $client->ip; ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
    'data'=>$client,
    'attributes'=>array(
        'id',
        'ip',
        'theme.name',
        'domain.domain',
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => CHtml::dropDownList("status", $client->status, array(
                 Clients::STATUS_NEW => Clients::STATUS_NEW,
                 Clients::STATUS_RESPONDED => Clients::STATUS_RESPONDED,
                 Clients::STATUS_CONTACTED => Clients::STATUS_CONTACTED,
                 Clients::STATUS_PAID => Clients::STATUS_PAID,
            )),
        ),
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
            'viewButtonUrl' => 'Yii::app()->createUrl("/clients/message", array("id" => $data->id))'
        ),
    ),
)); ?>

<?php Yii::app()->clientScript->registerScript('changeStatus', '
$("#status").change(function($e) {
    var self = $(this);
    $.post("'.$this->createUrl('changeStatus').'", {
        id: ' . $client->id . ',
        status: self.val(),
    }, function (data) {
        self.val(data.status);
    }, "json")
});
', CClientScript::POS_END); ?>