<?php
/* @var $this TeamController */
/* @var $model Team */


$this->breadcrumbs = array(
    'Команда' => array('index'),
    'Управление',
);
?>

    <h1>Управление командой</h1>

<?php $this->widget('backend.extensions.sortable.SortableGridView', array(
    'id' => 'team-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
    'columns' => array(
        'fullname',
        'position',
        'about',
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