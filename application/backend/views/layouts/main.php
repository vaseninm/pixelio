<?php
/* @var $this PxAdminController */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= $this->pageTitle ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<script src="/admin/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<?php if (!Yii::app()->user->isGuest) { ?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="<?= Yii::app()->params->itemAt('frontendUrl') ?>"><?= Yii::app()->params->itemAt('author') ?></a>
            <?php $this->widget('bootstrap.widgets.TbNav', array(
                'type' => TbHtml::NAV_TYPE_PILLS,
                'items' => array(
                    array('label' => 'Главная админки', 'url' => Yii::app()->params->itemAt('backendUrl')),
                    array('label' => 'Разделы админки', 'url'=>'#', 'items' => $this->adminMenu),
                    array('label' => 'Действия', 'url'=>'#', 'items' => $this->menu, 'visible' => !empty($this->menu)),
                ),
            )); ?>
            <span class="pull-right">
                    <span class="lead muted text-right">Привет, <?= Yii::app()->user->name ?>!</span>
                    <?php echo TbHtml::linkButton('Выход', array(
                        'color' => TbHtml::BUTTON_COLOR_DANGER,
                        'size' => TbHtml::BUTTON_SIZE_DEFAULT,
                        'url' => $this->createUrl('/site/logout'),
                    )); ?>
            </span>

        </div>
    </div>
</div>
<?php } ?>
<div class="container">
    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
        'links' => $this->breadcrumbs,
    )); ?>

    <?php $this->widget('bootstrap.widgets.TbAlert'); ?>

    <?php echo $content; ?>
    <hr>
    <footer>
        <p>&copy; <?= Yii::app()->params->itemAt('author') ?> <?= Yii::app()->params->itemAt('since') ?> &#8211 <?= date('Y') ?>.<!-- <?= Yii::t('app', '{n} год|{n} года|{n} лет|{n} года', (date('Y') - Yii::app()->params->itemAt('since')));?> на рынке.--></p>
    </footer>
</div>

<script src="/admin/js/libs/bootstrap.js"></script>
<script src="/admin/js/plugins.js"></script>
<script src="/admin/js/main.js"></script>
</body>
</html>