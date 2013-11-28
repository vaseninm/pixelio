<?php
    /* @var $this PfCarouselController */
    /* @var $model PfCarousel */
?>

<?php
$this->breadcrumbs=array(
	'Слайд шоу'=>array('index'),
	'Добавление элемента',
);
?>

    <h1>Добавление нового элемента</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>