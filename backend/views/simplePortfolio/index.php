<?php
/* @var $this TeamController */
/* @var $model Team */


$this->breadcrumbs = array(
    'Портфолио' => array('index'),
    'Управление',
);
?>

    <h1>Управление портфолио</h1>

<?php $this->widget('backend.extensions.sortable.SortableGridView', array(
    'id' => $model->getGridId(),
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
    'columns' => array(
        'title',
        'url',
        'desc',
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