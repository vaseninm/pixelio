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
	<script src="/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<? if (!Yii::app()->user->isGuest) { ?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="http://pixelio.tld/">Pixelio Web Studio</a>
            <?php $this->widget('bootstrap.widgets.TbNav', array(
                'type' => TbHtml::NAV_TYPE_PILLS,
                'items' => array(
                    array('label' => 'Главная админки', 'url' => '/'),
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
<? } ?>
<div class="container">
    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
        'links' => $this->breadcrumbs,
    )); ?>
    <?php echo $content; ?>
    <hr>
    <footer>
        <p>&copy; Pixelio 2008 &#8211 <?= date('Y') ?>. <?= Yii::t('app', '{n} года|{n} год|{n} лет|{n} года', (date('Y') - 2008));?> на рынке.</p>
    </footer>
</div>

<script src="/js/libs/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
</body>
</html>