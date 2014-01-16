<?php
/* @var $this ThemesController */
/* @var $model Themes */


$this->breadcrumbs = array(
    'Темы' => array('index'),
    'Управление',
);
?>

    <h1>Управление темами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'themes-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//        'id',
        'name',
        'strong',
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