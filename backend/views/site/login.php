<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

    <fieldset>
        <?php echo $form->textFieldControlGroup($model, 'username',
            array('help' => 'Введите логин')); ?>

        <?php echo $form->passwordFieldControlGroup($model, 'password',
            array('help' => 'Введите пароль')); ?>
    </fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton('Войти', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
)); ?>

<?php $this->endWidget(); ?>