<?php
/* @var $this NoticeController */
/* @var $model Notice */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'notice-form',
	'enableAjaxValidation'=>true,
)); ?>

    <?php echo $form->errorSummary($model); ?>

			<?php echo $form->dropDownListControlGroup($model, 'type', Notice::getType(), array('span' => 5)); ?>
	
            <?php echo $form->textFieldControlGroup($model,'address',array('span'=>5,'maxlength'=>255)); ?>

			<?php echo $form->dropDownListControlGroup($model, 'domain_id', Domains::getActive(), array('span' => 5)); ?>
	
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->