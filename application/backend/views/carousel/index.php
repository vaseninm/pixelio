<?php
/* @var $this PfCarouselController */
/* @var $model PfCarousel */


$this->breadcrumbs = array(
    'Слайд шоу' => array('index'),
    'Управление',
);
?>

    <h1>Управление слайд шоу</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'pf-carousel-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//'filter'=>$model,
    'columns' => array(
        'id',
        'work_id',
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