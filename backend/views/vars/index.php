<?php
/* @var $this VarsController */
/* @var $model Vars */


$this->breadcrumbs = array(
    'Фразы' => array('index'),
    'Управление',
);
?>

    <h1>Управление фразами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'vars-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//		'id',
        'name',
        'value',
		array(
            'name' => 'type',
            'value' => 'Vars::$types[$data->type]',
            'filter' => Vars::$types,
        ),
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
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>