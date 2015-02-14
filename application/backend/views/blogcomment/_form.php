<?php
/* @var $this BlogCommentController */
/* @var $model BlogComments */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => $model->getFormId(),
        'enableAjaxValidation' => true,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textAreaControlGroup($model, 'text', array('rows' => 3, 'span' => 8)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->