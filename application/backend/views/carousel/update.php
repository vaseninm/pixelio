<?php
    /* @var $this PfCarouselController */
    /* @var $model PfCarousel */
?>

<?php
$this->breadcrumbs=array(
    'Работы' => array('index'),
    'Редактирование работы',
);
?>

    <h1>Изменение PfCarousel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>