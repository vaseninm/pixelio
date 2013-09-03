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
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}',
        ),
    ),
)); ?>