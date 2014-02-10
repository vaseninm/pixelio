<?php
    /* @var $this PhrasesController */
    /* @var $phrase Phrases */
    /* @var $dynamic DynamicPhrases */
?>

<?php
$this->breadcrumbs=array(
	'Фразы'=>array('index'),
	'Изменение',
);
?>

    <h1>Изменение фразы <?php echo CHtml::encode($phrase->name); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$phrase)); ?>

<h1>Управление динамикой</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'id' => $dynamic->getGridId(),
		'type' => TbHtml::GRID_TYPE_BORDERED,
		'dataProvider' => $dynamic->search(),
		'filter' => $dynamic,
		'columns' => array(
			'id',
			'value',
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