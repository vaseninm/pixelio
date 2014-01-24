<?php
    /* @var $this PortfolioController */
    /* @var $works PfWorks */
?>

<?php
$this->breadcrumbs=array(
    'Работы' => array('works'),
    'Создание работы',
);
?>

    <h1>Создание работы</h1>

<?php $this->renderPartial('_form', array('works'=>$works)); ?>