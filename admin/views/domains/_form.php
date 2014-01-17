<?php
/* @var $this DomainsController */
/* @var $model Domains */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'domains-form',
	'enableAjaxValidation'=>true,
)); ?>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'domain',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->dropDownListControlGroup($model,'status',
                array(
                    Domains::STATUS_NEW => 'Новый',
                    Domains::STATUS_ACTIVE => 'Активный',
                    Domains::STATUS_BLOCKED => 'Заблоченный',
                    Domains::STATUS_DELETED => 'Удаленный',
                ),
                array('span'=>5,'maxlength'=>255)
            ); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->