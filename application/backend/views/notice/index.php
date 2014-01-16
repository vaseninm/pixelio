<?php
/* @var $this NoticeController */
/* @var $model Notice */


$this->breadcrumbs = array(
	'Уведомления' => array('index'),
	'Управление',
);
?>

<h1>Управление получателями уведомлений</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'notice-grid',
	'type' => TbHtml::GRID_TYPE_BORDERED,
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
			'name' => 'type',
			'value' => 'Notice::getType($data->type)',
			'filter' => Notice::getType(),
		),
		'address',
		array(
			'name' => 'domain_id',
			'value' => '$data->domain->domain',
			'filter' => Domains::getActive(),
		),
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'template' => '{update}{delete}',
		),
	),
));
?>

<?php
echo TbHtml::linkButton('Создать', array(
	'color' => TbHtml::BUTTON_COLOR_PRIMARY,
	'url' => $this->createUrl('create'),
));
?>