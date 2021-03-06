<?php
/* @var $this ThemesController */
/* @var $model Themes */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'themes-form',
        'enableAjaxValidation' => true,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->dropDownListControlGroup($model, 'name', Themes::getThemeCatalogs(), array('span' => 5, 'displaySize' => 1)); ?>

    <?php echo $form->textFieldControlGroup($model, 'strong', array('span' => 5)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'domain_id', Domains::getActive(), array('span' => 5, 'displaySize' => 1)); ?>


    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->