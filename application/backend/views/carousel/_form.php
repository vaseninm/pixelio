<?php
/* @var $this PfCarouselController */
/* @var $model PfCarousel */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'pf-carousel-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
        'asDropDownList' => true,
        'model' => $model,
        'attribute' => 'work_id',
        'data' => PfWorks::getAll(),
        'pluginOptions' => array(
            'width' => '300px',
            'placeholder' => 'Выбирите работу',
        ),
    )); ?>

    <?php echo $form->fileFieldControlGroup($model, 'image'); ?>


    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->