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

<?php
$csrf = "";
if(Yii::app()->request->enableCsrfValidation)
{
    $csrfTokenName = Yii::app()->request->csrfTokenName;
    $csrfToken = Yii::app()->request->csrfToken;
    $csrf = "\n\t\tdata:{ '$csrfTokenName':'$csrfToken' },";
}
$js=<<<EOD
function() {
	//0if(!confirm('Назначить эту страницу лицом проекта?')) return false;
	var th = this;
	jQuery('#pf-pages-grid').yiiGridView('update', {
		type: 'POST',
		url: jQuery(this).attr('href'),$csrf
		success: function(data) {
			jQuery('#pf-pages-grid').yiiGridView('update');
		},
		error: function(XHR) {
			return true;
		}
	});
	return false;
}
EOD;
?>


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
                'imagePathExpression' => '$data->getImageUrl(PfPages::TYPE_FACE)',
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{face}{delete}',
                'buttons' => array(
                    'face' => array(
                        'url'=>'Yii::app()->createUrl("/portfolio/setFace", array("page"=>$data->id))',
                        'icon' => TbHtml::ICON_OK,
                        'click'=>$js,
                        'visible'=>'!$data->isFace()',
                    ),
                ),
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