<?php
/* @var $this PortfolioController */
/* @var $works PfWorks */
/* @var $pages PfPages */
?>

<?php
$this->breadcrumbs = array(
    'Работы' => array('works'),
    'Редактирование работы',
);
?>

<h1>Редактирование работы <?php echo $works->title; ?></h1>

<?php $this->renderPartial('_form', array(
    'works' => $works,
)); ?>


<div class="form">
    <?php $this->widget('backend.extensions.sortable.SortableGridView', array(
        'id' => 'pf-pages-grid',
        'type' => TbHtml::GRID_TYPE_BORDERED,
        'sortUrl' => $this->createUrl('sortablePages'),
        'dataProvider' => PfPages::model()->search($works->id),
//    'filter' => $model,
        'columns' => array(
            'title',
            array(
                'class' => 'yiiwheels.widgets.grid.WhImageColumn',
                'htmlOptions' => array('class' => 'span1'),
                'imagePathExpression' => 'Yii::app()->params["domain"] . $data->getImageUrl(PfPages::TYPE_FACE)',
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{delete}',
            ),
        ),
    )); ?>

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'pf-pages-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'enableAjaxValidation' => true,
    )); ?>

    <?php echo $form->errorSummary($pages); ?>

    <?php echo $form->textFieldControlGroup($pages, 'title', array('span' => 5, 'maxlength' => 255)); ?>

    <?php echo $form->fileFieldControlGroup($pages, 'face'); ?>

    <?php echo $form->fileFieldControlGroup($pages, 'full'); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton('Загрузить', array(
            'color' => TbHtml::BUTTON_COLOR_SUCCESS,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->