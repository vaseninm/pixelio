<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
echo "\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>
?>

<h1>Управление моделью <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
'type' => TbHtml::GRID_TYPE_BORDERED,
'dataProvider'=>$model->search(),
//'filter'=>$model,
'columns'=>array(
<?php
$count = 0;
foreach ($this->tableSchema->columns as $column) {
    if (++$count == 7) {
        echo "\t\t/*\n";
    }
    echo "\t\t'" . $column->name . "',\n";
}
if ($count >= 7) {
    echo "\t\t*/\n";
}
?>
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'template' => '{update}{delete}',
),
),
)); ?>

<?php echo "<?php"; ?> echo TbHtml::linkButton('Создать', array(
    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
    'url' => $this->createUrl('create'),
)); ?>