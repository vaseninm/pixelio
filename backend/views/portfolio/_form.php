<?php
/* @var $this PortfolioController */
/* @var $works PfWorks */
/* @var $pages PfPages */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => $works->getFormId(),
        'enableAjaxValidation' => true,
    )); ?>


    <?php echo $form->errorSummary($works); ?>

    <?php echo $form->textFieldControlGroup($works, 'title', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->textAreaControlGroup($works, 'desc', array('span' => 5, 'maxlength' => 255)); ?>


    <?php if (!$works->isNewRecord) { ?>

        <div class="control-group">
            <? if (isset($works->face)) { ?>
            <?php $this->widget('yiiwheels.widgets.switch.WhSwitch', array(
                'model' => $works,
                'attribute' => 'status',
                'onLabel' => TbHtml::icon(TbHtml::ICON_OK),
                'offLabel' => TbHtml::icon(TbHtml::ICON_REMOVE),
            ));?>
            <? } else { ?>
                <p>Вывести работу можно будет только после того, как будет указана лицевая страница (<?= TbHtml::icon(TbHtml::ICON_OK) ?>)</p>
            <? } ?>
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