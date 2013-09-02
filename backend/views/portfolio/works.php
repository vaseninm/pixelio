<?php
/* @var $this PortfolioController */
/* @var $model PfWorks */


$this->breadcrumbs = array(
    'Работы',
);
?>

<h2>Портфолио</h2>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'pf-works-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//    'filter' => $model,
    'columns' => array(
        'title',
        'desc:html',
        'status:boolean',
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