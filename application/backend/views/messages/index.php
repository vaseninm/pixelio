<?php
/* @var $this MessagesController */
/* @var $model Messages */


$this->breadcrumbs = array(
    'Сообщения' => array('index'),
    'Управление',
);
?>

    <h1>Список сообщений</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'messages-grid',
    'type' => TbHtml::GRID_TYPE_BORDERED,
    'dataProvider' => $model->search(),
//'filter'=>$model,
    'columns' => array(
        'id',
        'visit.ip',
        'name',
        'email',
        'phone',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}{delete}',
        ),
    ),
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>