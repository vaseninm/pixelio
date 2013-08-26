<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Pixelio</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name="generator" content="" />
<link rel="stylesheet" href="/css/main.css" title="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/content.css" title="stylesheet" type="text/css" />
<!-- media queries css -->
<link href="css/media-queries.css" rel="stylesheet" type="text/css">

<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
  <div id="container">
    <header id="header">
      <div class="logo">
        <h1><a href="/">Создание сайтов "Pixelio"</a></h1>
        <h2 class="mobile"><a href="/">Лучшие сайты в мире это "Pixelio"</a></h2>
      </div>
      <figure class="topImg"><a href="/"><img alt="Создание сайтов &quot;Pixelio&quot;" src="/img/top_img.jpg" /></a></figure>
    </header>

	<div class="nav">
	<nav>
		<a id="menu-toggle" class="anchor-link" href="#">Меню</a>
		<ul id="menu">
        	<li><a href="/">Главная</a></li>
        	<li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'sites'))?>">Сайты</a></li>
        	<li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'promo'))?>">Промо</a></li>
        	<li><a href="#">Лендинг</a></li>
            <li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'flash'))?>">FLASH</a></li>
			<li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'banners'))?>">Баннеры</a></li>
        	<li><a href="#">Визитки</a></li>
			<li><a href="#">Плакаты</a></li>
        	<li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'about'))?>">О нас</a></li>
			<li><a href="<?= Yii::app()->createUrl('site/project', array('name' => 'contacts'))?>">Контакты</a></li>
        </ul>
	</nav>
	</div>

	<div class="clr"></div>

    <div id="wrapper">
      <div id="content">
          <?= $content;?>
      </div>
    </div>

    <div id="footer">
        <!--      <div class="pagination">
        <ul>
          <li class="bull">&bull;</li>
          <li class="active">1</li>
          <li><a href="/">2</a></li>
          <li><a href="/">3</a></li>
          <li><a href="/">4</a></li>
          <li><a href="/">5</a></li>
          <li class="bull">&bull;</li>
        </ul>
      </div>
      <div class="bottomSpacer"></div>-->
    </div>
  </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

	$('#menu-toggle').click(function () {
      $('#menu').toggleClass('open');
      e.preventDefault();
    });

});
</script>
</body>
</html>
