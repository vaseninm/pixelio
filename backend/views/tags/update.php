<?php
    /* @var $this TagsController */
    /* @var $model PfTags */
?>

<?php
$this->breadcrumbs=array(
    'Работы' => array('/portfolio/works'),
    'Теги' => array('/tags/admin'),
    'Редактирование тега',
);

?>

    <h1>Изменение тега <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>