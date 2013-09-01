<?php
/* @var $this PortfolioController */
/* @var $model PfWorks */


$this->breadcrumbs = array(
    'Pf Works' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List PfWorks', 'url' => array('index')),
    array('label' => 'Create PfWorks', 'url' => array('create')),
);

?>

    Поиск

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'pf-works-grid',
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