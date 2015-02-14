<?php
/* @var $this BlogCommentController */
/* @var $model BlogComments */

$this->breadcrumbs=array(
    'Коменты'
);
?>

<h1>Управление моделью посты</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'feedback-grid',
'type' => TbHtml::GRID_TYPE_BORDERED,
'dataProvider'=>$model->search(),
//'filter'=>$model,
'columns'=>array(
		'id',
		'text',
		'create_date:time',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'template' => '{update}{delete}',
),
),
)); ?>

<?php //echo TbHtml::linkButton('Создать', array(
//    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
//    'url' => $this->createUrl('create'),
//)); ?>