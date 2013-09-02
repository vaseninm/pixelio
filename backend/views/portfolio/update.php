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
    'pages' => $pages,
)); ?>