<?php
/* @var $this TagsController */
/* @var $model PfTags */


$this->breadcrumbs = array(
    'Работы' => array('/portfolio/works'),
    'Теги'
);

?>

    <h1>Теги</h1>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'pf-tags-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//    'filter' => $model,
    'columns' => array(
        'title',
        'desc',
        'price',
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