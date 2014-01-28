<?php
/* @var $this DomainsController */
/* @var $model Domains */


$this->breadcrumbs = array(
	'Домены' => array('index'),
	'Управление',
);
?>

<h1>Управление доменами</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'domains-grid',
	'type' => TbHtml::GRID_TYPE_BORDERED,
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
			'name' => 'domain',
			'value' => '"http://".$data->domain."/"',
			'type' => 'url',
		),
		array(
			'name' => 'status',
			'value' => 'Domains::getStatusLabel($data->status)',
			'filter' => Domains::getStatusLabelList(),
		),
		array(
			'name' => 'user_id',
			'value' => '$data->user->username',
//			'filter' => Domains::getStatusLabelList(),
		),
		'create_time',
		'update_time',
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