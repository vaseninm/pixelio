<?php
/* @var $this DomainsController */
/* @var $model Domains */


$this->breadcrumbs=array(
	'Domains'=>array('index'),
	'Manage',
);
?>

<h1>Управление моделью Domains</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'domains-grid',
'type' => TbHtml::GRID_TYPE_BORDERED,
'dataProvider'=>$model->search(),
//'filter'=>$model,
'columns'=>array(
		'id',
		'domain',
		'status',
		'create_time',
		'update_time',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'template' => '{update}{delete}',
),
),
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>