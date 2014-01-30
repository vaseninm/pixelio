<?php
    /* @var $this ThemesController */
    /* @var $model Themes */
?>

<?php
$this->breadcrumbs=array(
	'Темы'=>array('index'),
	'Изменение',
);
?>

    <h1>Изменение темы  <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>