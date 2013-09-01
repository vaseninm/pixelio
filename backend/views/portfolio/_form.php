<?php
/* @var $this PortfolioController */
/* @var $works PfWorks */
/* @var $pages PfPages */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'pf-works-form',
        'enableAjaxValidation' => true,
    )); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($works); ?>

    <?php echo $form->textFieldControlGroup($works, 'title', array('span' => 5, 'maxlength' => 255)); ?>

    <?php $this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
        'model' => $works,
        'attribute' => 'desc',
        'pluginOptions' => array(
            'minHeight' => 200,
        ),
    ));?>

    <?php if (!$works->isNewRecord) { ?>

        <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
            'model' => $works,
            'attribute' => 'status',
        ));?>

    <?php } ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($works->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>

<div class="form">
    <?php if (!$works->isNewRecord) { ?>

        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'pf-pages-grid',
            'dataProvider' => PfPages::model()->search($works->id),
//    'filter' => $model,
            'columns' => array(
                'title',
                'type',
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update}{delete}',
                ),
            ),
        )); ?>

        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'pf-pages-form',
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
            'enableAjaxValidation' => true,
        )); ?>

        <?php echo $form->errorSummary($pages); ?>

        <?php echo $form->textFieldControlGroup($pages, 'title', array('span' => 5, 'maxlength' => 255)); ?>

        <?php echo $form->fileFieldControlGroup($pages, 'face'); ?>

        <?php echo $form->fileFieldControlGroup($pages, 'full'); ?>

        <div class="form-actions">
            <?php echo TbHtml::submitButton($works->isNewRecord ? 'Create' : 'Save', array(
                'color' => TbHtml::BUTTON_COLOR_SUCCESS,
                'size' => TbHtml::BUTTON_SIZE_LARGE,
            )); ?>
        </div>

        <?php $this->endWidget(); ?>

    <?php } ?>
</div><!-- form -->