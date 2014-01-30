<?php
/* @var $this ClientsController */
/* @var $client Clients */
/* @var $visitsProvider CActiveDataProvider */
/* @var $messagesProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs = array(
	'Сообщение' => array('index'),
	$model->client->ip,
);
?>

<h1>Сообщение от клиента <?php echo $model->client->ip; ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client.ip',
		'name',
		'phone',
		'email',
		'comfortTime',
		'message',
		'client.theme.name',
		'client.domain.domain',
	),
));
?>