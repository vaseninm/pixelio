<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form TbActiveForm */
<?php echo "?>\n"; ?>

<div class="form">

    <?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'" . $this->class2id($this->modelClass) . "-form',
	'enableAjaxValidation'=>true,
)); ?>\n"; ?>

    <?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

    <?php
    foreach ($this->tableSchema->columns as $column) {
        if ($column->autoIncrement) {
            continue;
        }
        ?>
        <?php echo "<?php echo " . $this->generateActiveControlGroup($this->modelClass, $column) . "; ?>\n"; ?>

    <?php
    }
    ?>
    <div class="form-actions">
        <?php echo "<?php echo TbHtml::submitButton(\$model->isNewRecord ? 'Добавить' : 'Сохранить',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>\n"; ?>
    </div>

    <?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->