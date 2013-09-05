<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'feedback-form',
        'enableAjaxValidation' => true,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textAreaControlGroup($model, 'text', array('rows' => 6, 'span' => 8)); ?>

    <?php echo $form->textFieldControlGroup($model, 'author', array('span' => 5, 'maxlength' => 255)); ?>

    <div class="control-group">
        <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
            'model' => $model,
            'attribute' => 'approve',
            'onLabel' => TbHtml::icon(TbHtml::ICON_OK),
            'offLabel' => TbHtml::icon(TbHtml::ICON_REMOVE),
        ));?>
    </div>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->