<?php
    /* @var $this PfCarouselController */
    /* @var $model PfCarousel */
?>

<?php
$this->breadcrumbs=array(
	'Pf Carousels'=>array('index'),
	'Create',
);
?>

    <h1>Добавление нового PfCarousel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>