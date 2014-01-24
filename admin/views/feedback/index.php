<?php
/* @var $this FeedbackController */
/* @var $model Feedback */


$this->breadcrumbs=array(
    'Отзывы'
);
?>

<h1>Управление моделью Feedbacks</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'feedback-grid',
'type' => TbHtml::GRID_TYPE_BORDERED,
'dataProvider'=>$model->search(),
//'filter'=>$model,
'columns'=>array(
		'id',
		'text',
		'author',
		'approve:boolean',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'template' => '{update}{delete}',
),
),
)); ?>

<?php echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>