<?php
    /* @var $this PortfolioController */
    /* @var $works PfWorks */
    /* @var $pages PfPages */
?>

<?php
$this->breadcrumbs=array(
	'Pf Works'=>array('index'),
    $works->title=>array('view','id'=>$works->id),
	'Update',
);

    $this->menu=array(
    array('label'=>'List PfWorks', 'url'=>array('index')),
    array('label'=>'Create PfWorks', 'url'=>array('create')),
    array('label'=>'View PfWorks', 'url'=>array('view', 'id'=>$works->id)),
    array('label'=>'Manage PfWorks', 'url'=>array('admin')),
    );
    ?>

    <h1>Update PfWorks <?php echo $works->id; ?></h1>

<?php $this->renderPartial('_form', array(
    'works'=>$works,
    'pages'=>$pages,
)); ?>