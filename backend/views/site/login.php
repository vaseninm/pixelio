<?php
/* @var $this SiteController */
/* @var $model Users */
/* @var $form TbActiveForm */
Yii::app()->clientScript->registerCssFile('/css/singin.css');
?>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
    'htmlOptions' => array(
        'class' => 'form-signin',
    ),
)); ?>

    <form class="form-signin">
        <h2 class="form-signin-heading">Авторизация</h2>

        <?php echo $form->textField($model, 'username',
            array('placeholder' => 'Введите логин или email')); ?>

        <?php echo $form->passwordField($model, 'password',
            array('placeholder' => 'Введите пароль')); ?>

        <?php echo $form->errorSummary($model); ?>

        <br />

        <?= TbHtml::submitButton('Войти', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)) ?>
        <?php echo TbHtml::linkButton('На сайт', array(
            'color' => TbHtml::BUTTON_COLOR_SUCCESS,
            'size' => TbHtml::BUTTON_SIZE_DEFAULT,
            'url' => $this->createUrl('/site/logout'),
        )); ?>
    </form>

<?php $this->endWidget(); ?>