<?php
/* @var $this TeamController */
/* @var $model Team */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'team-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'fullname', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->textFieldControlGroup($model, 'position', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->textAreaControlGroup($model, 'about', array('rows' => 6, 'span' => 8)); ?>

    <?php echo $form->fileFieldControlGroup($model, 'face'); ?>

    <?php echo $form->fileFieldControlGroup($model, 'full'); ?>


    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->