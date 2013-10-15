<?php
    /* @var $this PfCarouselController */
    /* @var $model PfCarousel */
?>

<?php
$this->breadcrumbs=array(
	'Pf Carousels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

    <h1>Изменение PfCarousel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>