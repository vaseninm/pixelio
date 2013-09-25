<?php
    /* @var $this TagsController */
    /* @var $model PfTags */
?>

<?php
$this->breadcrumbs=array(
    'Работы' => array('/portfolio/works'),
    'Теги' => array('/tags/admin'),
    'Создание тега',
);

    ?>

    <h1>Создание тега</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>