<?php
/* @var $this PxAngularController */
?>
<!DOCTYPE html>
<html ng-app='pixelio'>
	<head ng-controller="SiteController">
		<!--Page Title-->
		<title>ДИЗАЙН ИНТЕРЬЕРА ОТ ПЕРВОЙ ПЛАНИРОВКИ ДО ВЪЕЗДА</title>
		<!--Meta Tags-->
		<meta charset="utf-8" />
		<meta name="keywords" content="Профессиональный дизайн интерьера. Дизайн-студия Инны Азорской возьмёт на себя ВСЕ ваши проблемы с ремонтом! Индивидуальный интерьер только под Вас. Контроль качества работ на всех уровнях." />
		<meta name="description" content="Дизайн интерьер ремонт квартира студия дизайн-студия Инна Азорская дизайнер" />
		<link rel="shortcut icon" href="<?= Yii::app()->theme->baseUrl ?>/files/img/favicon.png" type="image/png">
		<!-- Set Viewport-->
		<meta name="viewport" content="user-scalable=no,initial-scale=1.0, maximum-scale=1.0 width=device-width" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/bootstrap.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/arcticmodal.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/fancybox.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/bootstrap-responsive.css" type="text/css" media="screen" />
		
		<!--[if IE 8 ]>
		<link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style-ie.css" />
		<![endif]-->
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		  <script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script>
        
			<style type="text/css">
				body, html {zoom: 1;}
				img.bgImg {width: 100%;height: auto;position: fixed;bottom: 0;left: 0;}
			</style>
		<![endif]-->
		
		<script>
			var themePath = "<?= Yii::app()->theme->baseUrl ?>";
		</script>
		
		<!--Angular-->
		<script src="angular/libs/angular.js"></script>
		<script src="angular/controllers/SiteControllers.js"></script>
		<script src="angular/modules/Config.js"></script>
		
	</head>
	
<body id="top">
<!--[if lt IE 9]>
<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/bg4.jpg" class="bgImg" />
<div class="forBgIE">
<![endif]-->
	<div id="overlay"></div>
<!-- Header div -->
	<header>
		<div class="container">
			<div id="logo"><a href="http://azorskaya.ru/" target="_blank"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/logoTop.png" alt="" class=""></a></div>
			<div id="contTopRight">
				<div id="top-phone"><p>+7 (905) 539-57-58<br><span>Москва и Московская область</span></p></div>
				<div id="top-email"><p>info@azorskaya.ru</p></div>
			</div>
		</div>
		<h1>ДИЗАЙН ИНТЕРЬЕРА ОТ ПЕРВОЙ ПЛАНИРОВКИ ДО ВЪЕЗДА</h1>
	</header>
<!-- /Header div -->


<!-- Main Slider div -->
<div class="main-slider">
	<div class="container">
		<div id="da-slider" class="da-slider">
		<!-- Slider No.1 -->
				<div class="da-slide">
					<h1>Лучший дизайнер</h1>
					<p>Профессиональный дизайн интерьера. <br>Дизайн-студия Инны Азорской возьмёт на себя ВСЕ ваши проблемы с ремонтом!</p>
					<a href="#inna" class="da-link zayavka">Узнать больше</a>
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/inna_azorskaya.jpg" alt="Инна Азорская" /></div>
				</div>
		<!-- /Slider No.1 -->
		<!-- Slider No.2 -->
				<div class="da-slide">
					<h1>Авторский дизайн</h1>
					<p>Индивидуальный интерьер только под Вас. <br>Контроль качества работ на всех уровнях.</p>
					<a href="#demo" class="da-link zayavka">Примеры работ</a>
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/108.jpg" alt="" /></div>
				</div>
		<!-- /Slider No.2 -->
		<!-- Slider No.3 -->
				<div class="da-slide">
					<h1>Доступно для всех</h1>
					<p>3 основных пакета Дизайн-проектов. <br>Реальная и прозрачная ценовая политика.</p>
					<a href="#price" class="da-link gotarif">Выбрать пакет</a>
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/tarif.jpg" alt="" /></div>
				</div>
		<!-- /Slider No.3 -->
			</div>
	</div>
</div>
<!-- /Main Slider div -->
<!-- Static Slide -->
<div class="static-slide">
    	<div class="container">
			<h1>Дизайн-студия</h1>
			<p>Профессиональный дизайн интерьера. <br>Дизайн-студия Инны Азорской возьмёт на себя ВСЕ ваши проблемы с ремонтом!<br>
				Индивидуальный интерьер только под Вас. Контроль качества работ на всех уровнях.<br>
				Реальная и прозрачная ценовая политика.
			</p>
			<a href="#demo" class="da-link zayavka">Примеры работ</a>
			<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/inna_azorskaya.jpg" alt="Инна Азорская" /></div>
    	</div>
</div>
<!-- /Static Slide -->

<!-- Точка з -->
<div class="marginTop30" ng-controller="ContactController">
	<div class="container" id="zahvat">
		<div class="contact pull-left">
			<!-- Contact Form -->
			<form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23855146.reachGoal('TOP_FORM_A'); return true;">
				 <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" />
				 <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" />
				 <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" />
				 <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" />
			</form>
			<div class="success" ng-show="sended">Заявка отправлена.</div>
			<div class="error" ng-show="ContactForm.phone.$dirty && ContactForm.phone.$invalid">Заполните поле "Ваш телефон".</div>
		</div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект, и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
		</div>
	</div>
</div>



<!-- Преимущества -->
<div class="marginTop30">
	<div class="container" id="holder1">
	<!-- Features div -->
		<div class="features" id="features">
		<h2 class="cnt-title left-title">Наши преимущества</h2>
			<div class="splitter"></div>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="items">
						<h2 id="f-1">Профессионализм</h2>
						<p>Студия предлагает индивидуальную организацию жилого или рабочего пространства с учетом вкусовых предпочтений и пожеланий Заказчика.</p>
					</div>
					<div class="items">
						<h2 id="f-2">Успешность</h2>
						<p>С 2006-го года, дизайнерами Студии реализовано более 50 проектов жилых и корпоративных помещений, частных квартир и загородных домов.</p>
					</div>
					<div class="items">
						<h2 id="f-3">Известность</h2>
						<p>Оригинальные идеи дизайна Инны Азорской нашли отражение в многочисленных обзорах в СМИ, в изданиях «Лучшие интерьеры», «Красивые квартиры», «Идеи Вашего дома», «Квартирный ответ», «Домой».</p>
					</div>
				</div>
				<div class="span6">
					<div class="items">
						<h2 id="f-4">Точность</h2>
						<p>Грамотное оформление строительной документации, связанной с перепланировкой жилых помещений и госприемкой коммерческих объектов. Строгое соблюдение оговоренных сроков выполнения работ.</p>
					</div>
					<div class="items">
						<h2 id="f-5">Актуальность</h2>
						<p>Просчет стоимости материалов в процессе проектирования. Эффективный маркетинг лучших цен на стройматериалы по Москве.</p>
					</div>
					<div class="items">
						<h2 id="f-6">Честность</h2>
						<p>Предельно ясное формирование стоимости услуг Студии и проекта в целом. Конечная цена без наценок и удорожания.</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>


<!-- До и после работы -->
<div class="marginTop30">
	<div class="container" id="holder1">
		<h2 class="cnt-title left-title">Пример преображения</h2>
		<div class="splitter"></div>
		<div class="row-fluid">
            <div class="span6 centered">
                <h2 class="flexsH2">До работы</h2>
				<div class="flexslider tablet">
                    <ul class="slides" style="padding-left:30px">
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before1.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before2.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before3.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before4.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before5.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before6.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before7.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before8.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before9.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/before10.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="span6 centered">
                <h2 class="flexsH2">После работы</h2>
				<div class="flexslider tablet">
                    <ul class="slides" style="padding-right:30px">
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after1.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after2.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after3.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after4.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after5.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after6.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after7.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after8.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after9.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/works/after10.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Точка з -->
<div class="marginTop30" ng-controller="ContactController">
	<div class="container" id="zahvat2">
            <div class="contact pull-left">
                <!-- Contact Form -->
                <form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23855146.reachGoal('BOLI_FORM_A'); return true;">
                    <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" />
                    <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" />
                    <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" />
                    <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" />
                </form>
                <div class="success" ng-show="sended">Заявка отправлена.</div>
				<div class="error" ng-show="ContactForm.phone.$dirty && ContactForm.phone.$invalid">Заполните поле "Ваш телефон".</div>
            </div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект, и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
		</div>
	</div>
</div>



<!-- Боли -->
<div class="marginTop30" id="holder2">
	<div class="container">
	<!-- div -->
    	<div class="boly-wrapper pull-left">
			<div id="boly">
				<h2 class="boly-title left-title">Во многих случаях</h2>
				<div class="boly-items" id="first-quote"><p>Интерьер соответствует вкусу дизайнера а не Заказчика.</p></div>
				<div class="boly-items"><p>В угоду экономии, качество проектирования и качество работ идёт "под нож".</p></div>
				<div class="boly-items"><p>Завышенные и необоснованные цены на всё.</p></div>
				<div class="boly-items"><p>Частые срывы сроков выполнения заказа, вечный форсмажор.</p></div>
				<div class="boly-items"><p>Все проблемы с ремонтом и пути их решения лежат на плечах Заказчика.</p></div>				 
			</div>
		</div>
		<!-- / div -->
		
		<!-- div -->
		<div class="myWork-wrapper pull-right">
			<h2 class="good-title left-title greenH2">Как работаем мы</h2>
			<div class="myWork-items"><h4>Индивидуальный интерьер только под ВАС.</h4></div>
			<div class="myWork-items"><h4>Контроль качества работ на всех уровнях.</h4></div>
			<div class="myWork-items"><h4>Реальная и прозрачная ценовая политика стройки.</h4></div>
			<div class="myWork-items"><h4>Оптимизация процесса проектирования и строительных работ для выдерживания сроков.</h4></div>
			<div class="myWork-items" id="last-item"><h4>Взятие на себя и Решения всех проблем на стройке.</h4></div>	
		</div>
	</div>
		<!-- / div -->
</div>


<!-- Журналы, о себе-->
<section class="marginTop30" id="inna">
	<div class="container" id="holder1">
		<h2 class="cnt-title left-title">Дизайн-студия Инны Азорской</h2>
		<div class="splitter"></div>
		<div class="row-fluid">
			<div class="span7">		
				<div class="row-fluid">
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Август 2013</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013-1.jpg" class="fancybox-media" rel="pressa1"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013-2.jpg" class="fancybox-media" rel="pressa1">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013-3.jpg" class="fancybox-media" rel="pressa1">&nbsp;</a>
						</div>
					</div>
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Март 2013</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013-1.jpg" class="fancybox-media" rel="pressa2"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013-2.jpg" class="fancybox-media" rel="pressa2">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013-3.jpg" class="fancybox-media" rel="pressa2">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013-4.jpg" class="fancybox-media" rel="pressa2">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013-5.jpg" class="fancybox-media" rel="pressa2">&nbsp;</a>
						</div>
					</div>
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Февраль 2013</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2013-1.jpg" class="fancybox-media" rel="pressa3"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2013.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2013-2.jpg" class="fancybox-media" rel="pressa3">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2013-3.jpg" class="fancybox-media" rel="pressa3">&nbsp;</a>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Август 2012</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012-1.jpg" class="fancybox-media" rel="pressa4"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012-2.jpg" class="fancybox-media" rel="pressa4">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012-3.jpg" class="fancybox-media" rel="pressa4">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012-4.jpg" class="fancybox-media" rel="pressa4">&nbsp;</a>
						</div>
					</div>
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Ноябрь 2009</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009-1.jpg" class="fancybox-media" rel="pressa5"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009-2.jpg" class="fancybox-media" rel="pressa5">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009-3.jpg" class="fancybox-media" rel="pressa5">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009-4.jpg" class="fancybox-media" rel="pressa5">&nbsp;</a>
						</div>
					</div>
					<div class="span4">
						<div class="items" style="width:94%">
							<h2 class="jornalTitle">Ноябрь 2008</h2>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008-1.jpg" class="fancybox-media" rel="pressa6"><img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008.jpg" alt="" /></a>
						</div>
						<div class="hiden">
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008-2.jpg" class="fancybox-media" rel="pressa6">&nbsp;</a>
							<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008-3.jpg" class="fancybox-media" rel="pressa6">&nbsp;</a>
						</div>
					</div>
				</div>
            </div>
            <div class="span5">
				<div class="items">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/inna_azorskaya.jpg" alt="Инна Азорская" />
					<h3>Здравствуйте!<br> Меня зовут Инна Азорская, наша студия создает интерьеры премиум класса по индивидуальному, только Вашему дизайну.</h3>
				</div>
            </div>
        </div>
		<div class="row-fluid">
			<div class="span12 aboutTxt whiteBg">
				<p>Я всегда придаю особое значение функциональности, декору и цветовой гамме интерьера, что позволяет создавать действительно безупречный стиль.  
				<b>Ведь самые лучшие интерьеры не те, которые поражают своей оригинальностью,  а те в которых человеку комфортно…</b></p>
				<p>Профессиональный дизайнер интерьеров – это инженер и художник в одном лице. Однако чтобы получить уникальный и неповторимый интерьер, навыка работы 
				с отделочными материалами и умения грамотно составлять строительную документацию не достаточно. 
				<b>Важнее всего понять, чего же на самом деле хочет заказчик, и воплотить в жизнь все то, что происходит на уровне воображения.</b></p>
				<p>Я, Инна Азорская, готова ответить на все вопросы по телефону <b>+7 (905) 539-57-58</b> в Москве, или обсудить предстоящий проект в формате личной встречи за чашечкой чая или кофе в любое, удобное для Вас время.</p>
			</div>
		</div>
		<div class="marginBottom30"></div>
    </div>
</section>



<!-- Точка з -->
<section class="marginTop30" ng-controller="ContactController">
	<div class="container" id="zahvat">
        <div class="contact pull-left">
            <!-- Contact Form -->
            <form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23855146.reachGoal('PUBLICATION_FORM_A'); return true;">
                <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" />
                <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" />
                <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" />
                <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" />
            </form>
            <div class="success" ng-show="sended">Заявка отправлена.</div>
			<div class="error" ng-show="ContactForm.phone.$dirty && ContactForm.phone.$invalid">Заполните поле "Ваш телефон".</div>
        </div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект, и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
		</div>
	</div>
</section>


<!-- Как работаем-->
<section class="marginTop30">
	<div class="container" id="holder1">
		<h2 class="cnt-title left-title">Как мы работаем</h2>
			<div class="splitter"></div>
			<div class="row-fluid">
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step1.png" alt="" />
					<p class="howWeDo">Оставить заявку, получить три варианта планировки, <b><u>всё бесплатно</u></b>.</p>
				</div>
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step2.png" alt="" />
					<p class="howWeDo">Дизайн-проект вашей квартиры, согласно одному из выбранных проектов.</p>
				</div>
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step3.png" alt="" />
					<p class="howWeDo">Смета на строительные работы и маркетинг цен на выбранные материалы.</p>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step4.png" alt="" />
					<p class="howWeDo">Заключение договора на стройку с контролем качества всех работ и <b><u>бесплатной</u></b> доставкой материалов.</p>
				</div>
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step5.png" alt="" />
					<p class="howWeDo">Окончание строительных работ, декорирование, помощь с переездом.</p>
				</div>
				<div class="span4 centered">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/step6.png" alt="" />
					<p class="howWeDo">Професиональная съемка вашего дома и публикация в одном из ведущих интерьерных журналов.</p>
				</div>
			</div>
		<div class="marginBottom30"></div>
	</div>
</section>



<!-- Пакеты дизайнов -->
<section class="marginTop30" id="price">
	<div class="container" id="holder1">
		
		<h2 class="good-title left-title">Пакеты дизайн-проектов</h2>
		<div class="splitter"></div>
		<div class="row-fluid">
			<div class="span4">
			<div class="price">
				<img class="no-float" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/coin1.png" alt="Базовый" />
				<h2>Базовый</h2>
				<p class="subtittle clearfix"><img class="" alt="" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_doc.png">Полный пакет документации для стройки</p>
				<p class="subtittle clearfix">- План перепланировки
						<br>- План монтажа перегородок
						<br>- План потолков
						<br>- Спецификация дверей
						<br>- План светильников и выключателей
						<br>- План розеток
						<br>- План напольных покрытий
						<br>- Развёртки по стенам
						<br>- Раскладка плитки и привязка сантехники в санузлах<br><br>
				</p>
				<h2><?= Vars::get('priceBase') ?>р./м<sup>2</sup></h2>
			</div>
			</div>
			<div class="span4 whiteBg" style="border-bottom:5px solid #BDBC2E">
			<div class="ribbon"></div>
			<div class="price">
				<img class="no-float" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/coin2.png" alt="Оптимальный" />
				<h2>Оптимальный</h2>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_doc2.png" alt="" class=""><b>Полный пакет документации для стройки</b></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_pic2.png" alt="" class=""><b>3D визуализация по трём основным помещениям</b></p>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_dollar.png" alt="" class=""><b>Просчёт стоимости материалов прямо в процессе проектирования</b></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_shop.png" alt="" class=""><b>Поездки по магазинам для быстрого подбора отделочных материалов</b><br><br><br></p>
				<h2><?= Vars::get('priceOptimum') ?>р./м<sup>2</sup></h2>
			</div>
			</div>
			<div class="span4">
			<div class="price">
				<img class="no-float" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/coin3.png" alt="Люкс дизайн" />
				<h2>Люкс дизайн</h2>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_star_s.png" alt="" class=""><span>Авторская концепция дизайна с подбором мебели</span></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_doc3.png" alt="" class=""><span>Полный пакет документации для стройки</span></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_pic3.png" alt="" class=""><span>3D визуализация по всем основным помещениям, так же включая гардеробные и санузлы</span></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_map.png" alt="" class=""><span>Выезд к заказчику с материалами, маркетинг всех выбранных позиций по Москве</span></p>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_star_e.png" alt="" class=""><span>Декораторские работы на объекте<br><br><br></span></p>
				<h2><?= Vars::get('priceLux') ?>р./м<sup>2</sup></h2>
			</div>
			</div>
		</div>
		<h2 class="gray-title left-title">ОТ <?= Vars::get('turnkeyWorks') ?> ТЫС.РУБ. СТРОИТЕЛЬНЫЕ И ОТДЕЛОЧНЫЕ РАБОТЫ ПОД КЛЮЧ <br><span>(ЦЕНА НА 1 М<sup>2</sup> ПОЛА, БЕЗ УЧЕТА СТОИМОСТИ МАТЕРИАЛОВ)</span></h2>
	</div>
</section>



<!-- Встреча за напитками -->
<section class="marginTop30">
	<div class="container" id="zahvat3">
		<div class="row-fluid">
            <div class="span12 centered">
				<h2 class="coffe">Для Вашего удобства мы можем обсудить Ваш проект в формате ВСТРЕЧИ, поэтому предлагаем Вам встретиться за чашечкой чая или кофе в Москве, 
					в УДОБНОЕ ДЛЯ ВАС ВРЕМЯ и обсудить возможность сотрудничества.
					<br>Вас это ни к чему не обязывает.
				</h2>
				<button class="goModal">Договориться о встрече</button>
			</div>
		</div>
	</div>
</section>


<!-- Отзывы -->
<section class="marginTop30" id="demo">
	<a name="demo"></a>
	<div class="container" id="holder1">
		
		<h2 class="cnt-title left-title">Наши заказчики о нас</h2>
		<div class="splitter"></div>
		<div class="row-fluid marginBottom30">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client1.jpg" alt="" class="">
				<p><br>Синицина Наталья<br> Москва</p>
			</div>
			<div class="span4 centered">
				<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-1.jpg" class="fancybox-media" rel="portfolio1"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/thumb1a.jpg" alt=""></a>
				<div class="hiden">
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-2.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-3.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-4.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-5.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-6.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-7.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-8.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-9.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-10.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1-11.jpg" class="fancybox-media" rel="portfolio1">&nbsp;</a>
				</div>
			</div>
			<div class="span5">
				<p class="otziv">
					Прекрасно подобрана цветовая гамма квартиры. В такой квартире отдыхаешь, в ней тепло и уютно.
					Деталь гостиной, на которую обращают внимание все гости, — это камин,
					имеющий декоративную топку, а под камином в нише лежит связка настоящих
					березовых дров. Конечно, он не настоящий, так как наш современный дом не позволяет такую роскошь, но всем кажется,
					что он самый что ни на есть настоящий.
					<br>
					Я очень благодарна Инне за радость, которую я получаю находясь дома,
					именно здесь, в "моей крепости" моя семья отдыхает и накапливает энергию для дальнейшей активной жизни.
				</p>
			</div>
		</div>
		<div class="row-fluid marginBottom30">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client2.jpg" alt="" class="">
				<p><br>Щербединская Екатерина<br> Москва</p>
			</div>
			<div class="span4 centered">
				<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-1.jpg" class="fancybox-media" rel="portfolio2"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/thumb2a.jpg" alt=""></a>
				<div class="hiden">
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-2.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-3.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-4.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-5.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-6.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-7.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-8.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-9.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2-10.jpg" class="fancybox-media" rel="portfolio2">&nbsp;</a>
				</div>
			</div>
			<div class="span5">
				<p class="otziv">
					133 м², много это или мало, думала я с мужем, купив квартиру свободной планировки, продав свою тесную хрущевку. 
					Просторную  гостиную, спальную, детскую, хорошую кухню, гардеробные, санузлы,  настоящий мраморный камин хотелось видеть нам в нашей новой квартире.    
					Инна сумела    найти компромисс между нашей мечтой о печном  камине и реальностью квартирой в многоэтажном доме с отсутствием специального дымохода. 
					Она предложила нам альтернативу - домашний кинотеатр, заключенный в мраморную раму.
					<br>
					Моя семья сразу одобрила все решения предложенные Инной. 
					<br>
					Будем вас рекомендовать своим друзьям.
				</p>
			</div>	
		</div>
		<div class="row-fluid marginBottom30">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client3.jpg" alt="" class="">
				<p><br>Сафронова Екатерина<br> Москва</p>
			</div>
			<div class="span4 centered">
				<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-1.jpg" class="fancybox-media" rel="portfolio3"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/thumb3a.jpg" alt=""></a>
				<div class="hiden">
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-2.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-3.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-4.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-5.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-6.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-7.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-8.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-9.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-10.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-11.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-12.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3-13.jpg" class="fancybox-media" rel="portfolio3">&nbsp;</a>
				</div>
			</div>
			<div class="span5">
				<p class="otziv">
					Концепция  ремонта квартиры свободной планировки площадью 114 мкв вынашивалась в течение нескольких лет. 
					За это время был выбран стиль и требования к функциональным особенностям квартиры.  
					Сочетание собственных идей со свежим  и профессиональным взглядом дизайнера-архитектора Инны Азорской  
					сделало процесс поиска конкретных решений по дизайну квартиры творческим и приятным. 
					Концепцию получившегося  дизайн-проекта можно сформулировать так: «современный стиль со смелыми цветовыми и 
					архитектурными акцентами при максимальной функциональности и уюте». 
					По прошествии двух лет после окончания ремонта можем сказать, что концепция реализована полностью. 
					Жить в квартире приятно, удобно и не скучно.  Следует также сказать, что качество строительных и отделочных работ, 
					осуществлявшихся бригадой, рекомендованной Инной, полностью соответствуют качеству дизайн-проекта. 
				</p>
			</div>
		</div>
		<div class="row-fluid marginBottom30">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client4.jpg" alt="" class="">
				<p><br>Ольга<br>хозяйка дома</p>
			</div>
			<div class="span4 centered">
				<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-1.jpg" class="fancybox-media" rel="portfolio4"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/thumb4a.jpg" alt=""></a>
				<div class="hiden">
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-2.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-3.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-4.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-5.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-6.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-7.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-8.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-9.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-10.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-11.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-12.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-13.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c4-14.jpg" class="fancybox-media" rel="portfolio4">&nbsp;</a>
				</div>
			</div>
			<div class="span5">
				<p class="otziv">
					Мы с мужем всегда мечтали о своем  загородном доме из дерева. 
					Заказав проект в   строительной организации, которая нам его и построила, мы задумались о том, какой он должен быть внутри. 
					Нам очень не хотелось, чтобы он превратился в гипсокартоновую коробку, или «баню» как это часто бывает. 
					Начитавшись о неудачном опыте работы с дизайнерами, мы обратились к друзьям. 
					Они посоветовали Инну, так как остались довольны  работой с ней. 
					Мы начали  работать по дизайн-проекту  нашего дома  и не пожалели об этом.
					<br>					
					Волнительным для нас был момент, когда мы увидели визуализацию интерьеров. 
					Мы боялись испортить чудесные образы сделанные Инной, но она   внимательно отнеслась ко всем нашим пожеланиям, 
					помогла определиться нам с выбором отделочных материалов, подбором мебели. 
					Особым местом в нашем доме стала большая светлая гостиная с панорамными окнами, камином и балконом второго этажа. 
					Инне удалось создать для нас уникальный образ нашего дома.
					<br>
					Спасибо Вам Инна, нам легко было с вами работать. 
				</p>
			</div>
		</div>
		<div class="row-fluid marginBottom30">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client5.jpg" alt="" class="">
				<p><br>Елена Степанова<br> Москва</p>
			</div>
			<div class="span4 centered">
				<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-1.jpg" class="fancybox-media" rel="portfolio5"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/thumb5a.jpg" alt=""></a>
				<div class="hiden">
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-2.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-3.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-4.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-5.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-6.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-7.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-8.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-9.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-10.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-11.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
					<a href="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c5-12.jpg" class="fancybox-media" rel="portfolio5">&nbsp;</a>
				</div>
			</div>
			<div class="span5">
				<p class="otziv">
					Мы с мужем достаточно долго шли к покупке большой квартиры. И вот, наконец, наша мечта осуществилась - квартира приобретена.<br> 
					Через "седьмые руки" мы узнали об Инне Азорской. Посмотрев портфолио на сайте, поняли, что ее работы нам близки по стилю, решили встретиться.<br> 
					За все время работы (а это - более года вместе с самим ремонтом) оговариваемые сроки не были нарушены ни разу 
					(мы, в свою очередь, тоже не нарушали сроки оплаты работы, заказа материалов, мебели и т.д., ведь соблюдение сроков процесс обоюдный). 
					Инна несколько дней потратила с нами на поездку по торговым точкам в поисках решений. 
					При этом она грамотно и корректно руководила процессом выбора, чтобы мы не утонули в море предложений, четко следовали заданному нами же стилю, 
					не кидались из крайности в крайность, увидев какое-то оригинальное решение, которое категорически не вписывалось бы в идею нашего дома.<br> 
					Мы, в лице Инны, нашли не просто нашего дизайнера, но и близкого человека. Мы обожаем наш дом, и понимаем, что без ее таланта и каждодневного кропотливого труда, 
					такой гармонии и уюта у нас в доме не было бы.! Спасибо тебе!
				</p>
			</div>
		</div>
	</div>
</section>


<!-- Команда -->
<!--<section class="marginTop30 marginBottom30">
	<div class="container whiteBg centered" id="">	
		<h2 class="cnt-title left-title">Мы возьмём на себя Ваши проблемы с ремонтом</h2>
		<div class="splitter"></div>
		<div class="row-fluid">
			<div class="span12 centered">
				<img class="jornal2" src="<?= Yii::app()->theme->baseUrl ?>/files/img/foto-ludey.jpg" alt="" /><br>
				<button class="goModal">Договориться о встрече</button>
			</div>
		</div>
	</div>
</section>-->


<!-- Точка з -->
<section class="marginTop30" ng-controller="ContactController">
	<div class="container" id="zahvat2">
        <div class="contact pull-left">
            <!-- Contact Form -->
            <form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23855146.reachGoal('BOTTOM_FORM_A'); return true;">
                <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" />
                <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" />
                <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" />
                <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" />
            </form>
            <div class="success" ng-show="sended">Заявка отправлена.</div>
			<div class="error" ng-show="ContactForm.phone.$dirty && ContactForm.phone.$invalid">Заполните поле "Ваш телефон".</div>
        </div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект, и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
		</div>
	</div>
	<div class="marginBottom30"></div>
</section>

<section class="marginTop30">
	<div class="container centered" id="holder1">
		<p class="copy">
			Приобретая продукт, либо оставляя заявку на сайте, Вы соглашаетесь с <a href="#" id="privacyPolicy">условиями политики конфиденциальности</a>.
			<br>Все авторские права защищены. Полное или частичное копирование материалов сайта запрещено!
			<br>ООО «Тэрра-Проект» ОГРН 1065010000912
        </p>
	</div>
</section>

<!--[if lt IE 9]></div><![endif]-->

<!-- Модальное окно -->
<div style="display: none;">
    <div class="box-modal clearfix" id="actionModal" ng-controller="ContactController">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
		<h2 class="zahvat-title">Давайте встретимся</h2>
        <!-- Contact Form -->
		<form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23855146.reachGoal('POPAP_FORM_A'); return true;">
			 <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" />
			 <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" />
			 <input type="text" name="time" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" />
			 <input type="submit" name="send-btn" class="btn1" value="Договориться о встрече" />
		</form>
		<div class="success" ng-show="sended">Заявка отправлена.</div>
		<div class="error" ng-show="ContactForm.phone.$dirty && ContactForm.phone.$invalid">Заполните поле "Ваш телефон".</div>
    </div>
</div>

<!-- Модальное окно -->
<div style="display: none;">
    <div class="box-modal2 clearfix" id="privacyModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
		<section class="privacyContent">
			<!-- Content -->
			<h1>Политика конфиденциальности</h1>
			<p>Мы высоко ценим Ваш интерес к нашему проекту и уважаем всех пользователей нашего ресурса. 
			Защита персональных данных для нас очень важна. Мы соблюдаем правила защиты персональных 
			данных и защиты ваших данных от несанкционированного доступа третьих лиц (защита персональных данных).</p>
			<p>Заполнение формы с контактными данными означает безоговорочное согласие с настоящей Политикой 
			конфиденциальности и указанными в ней условиями обработки персональной информации.</p>
			<h3>Ниже приводится информация об обработке персональных данных.</h3>
			<ol> 
				<li> <b>Персональные данные. Цель сбора и обработки персональных данных.</b>
					<ul>
						<li> Вы всегда можете посетить данную страницу, не раскрывая никакой персональной информации.</li>
						<li> Под персональными данными понимается любая информация, относящаяся к определенному или определяемому на основании такой информации физическому лицу.</li>
						<li> Наша компания собирает и использует персональные данные, необходимые для выполнения Вашего запроса, это – имя и электронный адрес.</li>
						<li> Наша компания не проверяет достоверность персональных данных, предоставляемых физическими лицами, и не проверяет их дееспособность.</li>
					</ul>
				</li>
				<li> <b>Условия обработки персональной информации покупателя и её передачи третьим лицам.</b>
					<ul>
						<li> При обработке персональных данных посетителей сайта наша компания руководствуется Федеральным законом РФ «О персональных данных».</li>
						<li> В отношении персональной информации покупателя сохраняется ее конфиденциальность.</li>
						<li> Наша компания не передает персональные данные третьим лицам.</li>
					</ul>
				</li>
				<li> <b>Меры, применяемые для защиты персональной информации пользователей.</b>
					<ul>
						<li> Наша компания принимает необходимые и достаточные организационные и технические меры для защиты персональной информации пользователя от неправомерного или случайного доступа, 
						уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий с ней третьих лиц.</li>
					</ul>
				</li>
			</ol>
		</section>
    </div>
</div>


<!-- Javascript -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/supersized.3.2.7.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.scrollto.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.arcticmodal-0.3.min.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/custom.js"></script>
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23855146 = new Ya.Metrika({id:23855146,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23855146" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->	
	
</body>
</html>
