<?php
    /* @var $this PfCarouselController */
    /* @var $model PfCarousel */
?>

<?php
$this->breadcrumbs=array(
    'Слайд-шоу' => array('index'),
    'Редактирование элемента',
);
?>

    <h1>Изменение элемента <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>