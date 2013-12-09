<?php
/* @var $this VarsController */
/* @var $model Vars */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'vars-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype'=>'multipart/form-data'),
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'name', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->radioButtonListControlGroup($model, 'type', Vars::$types, array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'value', array(
        'span' => 5, 'maxlength' => 255, 'data-type' => Vars::TYPE_TEXT,
    )); ?>
    <?php echo $form->textAreaControlGroup($model, 'value', array(
        'rows' => 6, 'span' => 8, 'data-type' => Vars::TYPE_HTML,
    )); ?>
    <?php echo $form->fileFieldControlGroup($model, 'file', array(
        'span' => 5, 'maxlength' => 255, 'data-type' => Vars::TYPE_IMAGE,
    )); ?>


    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<?php Yii::app()->clientScript->registerScript('types','
$(document).ready(function(){
    function enableActiveInput(){
        var type = $("input[id^=Vars_type_]:checked").val();
        for(var i = 1; i <= 3; i++) {
            if (type == i) {
                $("#vars-form [data-type="+i+"]").removeAttr("disabled").parents("div.control-group").removeClass("hide").addClass("show");
                $("#vars-form [data-type="+i+"]").siblings("input").removeAttr("disabled");
            } else {
                $("#vars-form [data-type="+i+"]").attr("disabled", "disabled").parents("div.control-group").removeClass("show").addClass("hide");
                $("#vars-form [data-type="+i+"]").siblings("input").attr("disabled", "disabled");
            }
        }
    }
    enableActiveInput();
    $("input[id^=Vars_type_]").click(function(e) {
        enableActiveInput();
    });
});
', CClientScript::POS_END); ?>