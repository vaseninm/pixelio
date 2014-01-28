<?php
    /* @var $this DomainsController */
    /* @var $model Domains */
?>

<?php
$this->breadcrumbs=array(
	'Домены'=>array('index'),
	'Изменение ' . CHtml::encode($model->domain),
);
?>

    <h1>Изменение <?php echo CHtml::encode($model->domain); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>