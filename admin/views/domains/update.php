<?php
    /* @var $this DomainsController */
    /* @var $model Domains */
?>

<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	'Update',
);
?>

    <h1>Изменение Domains <?php echo $model->domain; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>