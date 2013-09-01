<?php
    /* @var $this PortfolioController */
    /* @var $pages PfWorks */
?>

<?php
$this->breadcrumbs=array(
	'Pf Works'=>array('index'),
	'Create',
);

    $this->menu=array(
    array('label'=>'List PfWorks', 'url'=>array('index')),
    array('label'=>'Manage PfWorks', 'url'=>array('admin')),
    );
    ?>

    <h1>Create PfWorks</h1>

<?php $this->renderPartial('_form', array('pages'=>$pages)); ?>