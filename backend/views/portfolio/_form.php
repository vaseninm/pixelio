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


    <?php echo $form->errorSummary($works); ?>

    <?php echo $form->textFieldControlGroup($works, 'title', array('span' => 5, 'maxlength' => 255)); ?>

    <div class="control-group">
        <?php $this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
            'model' => $works,
            'attribute' => 'desc',
            'pluginOptions' => array(
                'minHeight' => 200,
            ),
        ));?>
    </div>

    <?php if (!$works->isNewRecord) { ?>

        <div class="control-group">
            <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
                'model' => $works,
                'attribute' => 'status',
            ));?>
        </div>

        <div class="control-group">
            <?php
            $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
                'asDropDownList' => true,
                'model' => $works,
                'attribute' => 'tags',
                'data' => PfTags::getTagsList(),
                'htmlOptions' => array(
                    'multiple' => true,
                ),
                'pluginOptions' => array(
                    'placeholder' => 'Выберите теги',
                    'tokenSeparators' => array(',', ' '),
                    'width' => 500,
                )
            ));
            ?>
        </div>


    <?php } ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($works->isNewRecord ? 'Создать' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>