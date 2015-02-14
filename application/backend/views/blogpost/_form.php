<?php
/* @var $this BlogPostController */
/* @var $model BlogPosts */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => $model->getFormId(),
        'enableAjaxValidation' => true,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'title'); ?>

    <?php echo $form->textAreaControlGroup($model, 'small', array('rows' => 3, 'span' => 8)); ?>
    <?php echo $form->textAreaControlGroup($model, 'full', array('rows' => 6, 'span' => 8)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->