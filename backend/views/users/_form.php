<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'users-form',
        'enableAjaxValidation' => true,
    )); ?>


    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'username', array('span' => 5, 'maxlength' => 64)); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 256)); ?>

    <?php echo $form->passwordFieldControlGroup($model, 'password', array('span' => 5, 'maxlength' => 256)); ?>

    <div class="control-group">
        <?php
        $this->widget(
            'yiiwheels.widgets.formhelpers.WhSelectBox',
            array(
                'model' => $model,
                'attribute' => 'role',
                'data' => Users::getRoles(),
            )
        );
        ?>
    </div>

    <?php echo $form->textFieldControlGroup($model, 'createTime', array('span' => 5)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->