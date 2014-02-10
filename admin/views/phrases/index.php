<?php
/* @var $this PhrasesController */
/* @var $model Phrases */


$this->breadcrumbs = array(
	'Фразы' => array('index'),
	'Управление',
);
?>

	<h1>Управление фразами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => $model->getGridId(),
	'type' => TbHtml::GRID_TYPE_BORDERED,
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'name',
		'value',
		array(
			'name' => 'type',
			'value' => 'Phrases::$types[$data->type]',
			'filter' => Phrases::$types,
		),
		array(
			'name' => 'theme_id',
			'value' => '$data->theme->name',
			'filter' => Themes::getAll(),
		),
		array(
			'name' => 'theme.domain_id',
			'value' => '$data->theme->domain->domain',
			'filter' => Domains::getActive(),
		),
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'template' => '{update}{delete}',
		),
	),
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
	'color' => TbHtml::BUTTON_COLOR_PRIMARY,
	'url' => $this->createUrl('create'),
)); ?>