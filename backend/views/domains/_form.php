<?php
/* @var $this DomainsController */
/* @var $model Domains */
/* @var $form TbActiveForm */
?>

<div class="form">

	<?php
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id' => 'domains-form',
		'enableAjaxValidation' => true,
	));
	?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model, 'domain', array('span' => 5, 'maxlength' => 255)); ?>

	<?php
	echo $form->dropDownListControlGroup($model, 'status', Domains::getStatusLabelList(), array(
			'span' => 5, 
			'maxlength' => 255,		
			'displaySize' => 1,
			'empty' => 'Выберите статус',
		));
	?>
	
	<div class="control-group">
        <?php $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
            'asDropDownList' => true,
            'model' => $model,
            'attribute' => 'user_id',
            'data' => CHtml::listData(Users::model()->findAllByAttributes(array('role' => Users::ROLE_USER)), 'id', 'username'),
            'htmlOptions' => array(
                'multiple' => false,
				'empty' => 'Выберите пользователя',
            ),
            'pluginOptions' => array(
                'placeholder' => 'Выберите пользователя',
                'width' => 500,             
			)
            )); ?>
        </div>

	<div class="form-actions">
		<?php
		echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
			'color' => TbHtml::BUTTON_COLOR_PRIMARY,
			'size' => TbHtml::BUTTON_SIZE_LARGE,
		));
		?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->