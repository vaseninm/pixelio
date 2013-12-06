<?php
/* @var $this PxAngularController */
?>
<!DOCTYPE html>
<html ng-app="pixelio">
<head ng-controller="SiteController">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Pixelio Land</title>

    <link rel="shortcut icon" href="<?= Yii::app()->theme->baseUrl ?>/files/img/favicon.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Создание лэндингов" />
    <meta name="keywords" content="лэндинг, продвижение, Дизайн, Програмирование" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <style type="text/css">
        body, html {
            zoom: 1;
            background: #3A78C5 !important;
        }

        img.bgImg {
            width: 100%;
            height: auto;
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/bootstrap-combined.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/animate-custom.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/jquery.css" media="all">


</head>
<body>
<!--[if lt IE 9]>
<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/background.jpg" class="bgImg" />
<div style="position:relative">
<![endif]-->
<!-- HEADER HOME  -->
        <section id="home">
		
		
			<div class="square1-2">
				<a class="target" href="#services">
					<div class="in orange">Быстрый старт продаж</div>
				</a>
			</div>
			
			<div class="square1-4">
				<a class="target" href="#whatwedo">
					<div class="in blue">Креативный подход</div>
				</a>
			</div>
			
			<div class="square2-1">
				<a class="target" href="#services">
					<div class="in green">Сделаем отличный лэндинг</div>
				</a>
			</div>
			
			<div class="square2-2-3">
				<!-- LOGO -->
			</div>
			
			<div class="square2-4">
				<a class="target" href="#contact">
					<div class="in siren">Всегда можно договориться</div>
				</a>
			</div>
			
			<div class="square3-1">
				<a class="target" href="#services">
					<div class="in darckblue">Продвижение лэндингов</div>
				</a>
			</div>
			
			<div class="square3-2">
				<div class="flexslider tablet">
                    <ul class="slides">
                        <li><h2>Создание сайтов и лэндингов</h2></li>
						<li><h2>продвижение лэндингов в подарок</h2></li>
                        <li><h2>улучшайте свои кампании</h2></li>
                        <li><h2>привлеките новых клиентов</h2></li>
                    </ul>
                </div>
			</div>
			
			<div class="square3-3">
				<a class="target" href="#whatwedo">
					<div class="in red">Уникальный дизайн</div>
				</a>
			</div>
			
			<div class="square4-2">
				<a class="target" href="#contact">
					<div class="in liteorange">Закажите сейчас</div>
				</a>
			</div>
			
			<div class="square4-4">
				<a class="target" href="#about">
					<div class="in liteblue">Мы знаем своё дело</div>
				</a>
			</div>
		
		
            <div class="row centered tablet2">
                <h1 class="fade-it"><img alt="Pixelio Land" src="<?= Yii::app()->theme->baseUrl ?>/files/img/logo_header_min.png"></h1>
                <div class="flexslider">
                    <ul class="slides">
                        <li><h2>Создание лэндингов</h2></li>
						<li><h2>продвижение в подарок</h2></li>
                        <li><h2>улучшайте свои кампании...</h2></li>
                        <li><h2>... привлеките новых клиентов</h2></li>
                    </ul>
                </div>
            </div>

            <!-- LITTLE LOGO SEE WHAT WE DO --> 
            <div id="down_button" class="fade-it"><a href="#whatwedo"></a></div>
            <div class="phone-header">
				<h2>+7 921 4569532 <span>Мск</span><br>+7 921 4569532 <span>СпБ</span></h2>
            </div>
            <!-- END LITTLE LOGO SEE WHAT WE DO --> 

        </section>
<!-- END HEADER HOME  -->

<!-- NAVIGATION  -->
<div class="navbar-wrapper">
    <div class="navbar" id="navigation">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="">  <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/logo_small.png"></a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="#home" class="">Главная</a></li>
                    <li><a href="#whatwedo">Портфолио</a></li>
                    <li><a href="#services">Сервис</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#contact">Контакты</a></li>


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END NAVIGATION  -->

<!-- WHAT WE DO SECTION  -->
<section id="whatwedo" ng-controller="PortfolioController">
    <div class="container">
        <div class="row">
            <div class="span12 centered">

                <h2>Изучите наши работы</h2>
                <div class="breaker"><span class="left"></span><div class="pixelio"></div><span class="right"></span></div>

            </div>
        </div>
        <div class="row">
            <div class="span12 centered">
                <p class="subtittle">Наши проекты нацелены на увеличение прыбыли наших клиентов. </p>
            </div>
        </div>
        <div class="row">
            <div class="span3 project" ng-repeat="item in items">
                <img src="{{ item.faceImg }}" alt="{{ item.title }}" class="project-img">
                <a href="{{ item.fullImg }}" class="fancybox-media" data-title-id="title-{{ item.id }}" rel="portfolio">
                    <span class="overlay"></span>
                    <div class="cnt"></div>
                </a>
                <div id="title-{{ item.id }}" class="info hidden">
                    <h2>{{ item.title }}</h2>
                    <div class="fancybody">{{ item.desc }}. <br /> <a href="{{ item.url }}" title="{{ item.title }}">Проект "{{ item.title }}"</a></div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="span12 centered">
                <a class="prev" href="#" ng-click="prevPage($event)" ng-hide="isFirst"></a>
                <div class="subtext"></div>
                <a class="next" href="#" ng-click="nextPage($event)" ng-hide="isLast"></a>
            </div>
        </div>

    </div>
</section>
<!-- END WHAT WE DO SECTION  -->

<!-- SERVICES SECTION  -->

<section id="services">

    <div class="container">
        <div class="row">
            <div class="span12 centered">
                <h2>Как мы работаем</h2>
                <div class="breaker"><span class="left"></span><div class="pixelio"></div><span class="right"></span></div>
            </div>
        </div>
        <div class="row">
            <div class="span12 centered">
                <p class="subtittle">Мы разрабатываем стратегию, создаем конверторы, настраиваем поток лидов, считаем воронку. </p>
            </div>
        </div>

        <div class="row">
            <div class="span3">
                <div class="box">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/develop.png" alt="" class="">
                    <h6><strong>Разработка</strong></h6>
                    <p>
                        Ну в общем разработаем что надо
                    </p>

                </div>
            </div>
            <div class="span3">
                <div class="box">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/design.png" alt="" class="">
                    <h6><strong>Дизайн</strong></h6>
                    <p>
                        От простого до сложного
                    </p>

                </div>
            </div>
            <div class="span3">
                <div class="box">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/coding.png" alt="" class="">
                    <h6><strong>Програмирование</strong></h6>
                    <p>
                        Функционал под любые задачи
                    </p>

                </div>
            </div>
            <div class="span3">
                <div class="box">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/seo.png" alt="" class="">
                    <h6><strong>Продвижение</strong></h6>
                    <p>
                        Продвинем как надо в лучшем виде
                    </p>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="span3"></div>
            <div class="span6 centered">
                <p>&nbsp;</p>
                <p><a id='contact_button' href="#contact" class="button">Договориться о встрече</a></p>
            </div>
            <div class="span3"></div>
        </div>



    </div>


</section>
<!-- END SERVICES  -->
<!-- WHO ARE US SECTION  -->
<section id="about" ng-controller="TeamController">
    <div class="container">
        <div class="row">
            <div class="span12 centered">
                <h2>Познакомьтесь с командой студии</h2>
                <div class="breaker"><span class="left"></span><div class="pixelio"></div><span class="right"></span></div>
            </div>
        </div>

        <div class="row">
            <div class="span12 centered">
                <p class="subtittle">Мы любим свою работу и делаем крутые проекты.</p>
            </div>
        </div>

        <div class="row">
            <div class="span3" ng-repeat="item in items">
                <div class="team">
                    <img alt="{{ item.fullname }}" ng-src="{{ item.faceImg }}">
                    <span class="name">{{ item.fullname }}</span><br>
                    <span class="position">{{ item.position }}</span><br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12 centered">
                <a class="prev" href="#" ng-click="prevPage($event)" ng-hide="isFirst"></a>
                <div class="subtext"></div>
                <a class="next" href="#" ng-click="nextPage($event)" ng-hide="isLast"></a>
            </div>
        </div>

        <div class="row">
            <div class="span12 centered">
                <p class="subtittle">Удобнее всего обсуждать проекты в формате встречи, поэтому предлагаем встретиться за чашечкой чая в Москве и обсудить возможность сотрудничества. Вас это ни к чему не обязывает.</p>
            </div>
        </div>
    </div>
</section>
<!-- END WHO ARE US SECTION  -->

<!-- CONTACT SECTION  -->
<section id="contact" ng-controller="ContactController">
    <div class="container">
        <div class="row">
            <div class="span12 centered">
                <h2>Свяжитесь с нами</h2>
                <div class="breaker">
                    <span class="left"></span>
                    <div class="pixelio"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12 centered">
                <p class="subtittle">Мы можем помочь Вам продвинуть Ваш бизнес.<br> Вы тоже так думаете? Напишите или позвоните нам.</p>
            </div>
        </div>
        <div class="row">
            <div class="span7">
                <form name="ContactForm" method="post" action="" ng-submit="leftContact()">
                    <input name="name" placeholder="ВАШЕ ИМЯ" type="text" ng-model="leftContactModel.name" ng-required="true">
                    <input name="email" placeholder="ВАШ E-MAIL" type="email" ng-model="leftContactModel.email" ng-required="true">
                    <textarea name="message" cols="1" rows="5" placeholder="ВАШЕ СООБЩЕНИЕ" ng-model="leftContactModel.message" ng-required="true"></textarea>
                    <button name="send" type="submit" class="button" ng-disabled="ContactForm.$invalid">Договориться о встрече</button>
                </form>
            </div>
            <div class="span5">
                <div class="info">
                    <p class="contactAddress">Москва, ул. Лизюкова 35 - <a class="fancybox-media fancybox.iframe" href="https://maps.google.com/maps/ms?ie=UTF8&amp;oe=UTF8&amp;msa=0&amp;msid=218337429610107903639.00047c7b97971cc480289&amp;dg=feature&amp;t=h&amp;ll=48.857423,2.286819&amp;spn=0.002471,0.00456&amp;z=17&amp;iwloc=00047c7b9b089f45e6058&amp;output=embed">Посмотреть на карте</a></p>
                    <p class="contactPhone">Телефон: 325698874521</p>
                    <p class="contactEmail">Email: <a href="#">info@pixelio.ru</a></p>
                    <p class="contactSkype">Skype: <a href="#">pixelio</a></p>
                </div>
                <div class="info">
                    <p class="contactAddress">Санкт-Петербург</p>
                    <p class="contactPhone">Телефон: +7 911 0915599</p>
                    <p class="contactEmail">Email: <a href="#">info@pixelio.ru</a></p>
                    <p class="contactSkype">Skype: <a href="#">pixelio</a></p>
                </div>
                <div class="info">
                    <p class="contactTime">
                        Пн.-Пт.: 10:00 → 17:00 <br>
                        Суббота, Воскресенье - выходной
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT SECTION  -->

<!-- FOOTER  -->
<footer>

    <!-- SOCIAL MODULE  -->
    <!--<section id="social_module">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul>
                        <li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->
    <!-- END SOCIAL MODULE  -->

    <!-- COPYRIGHT  -->
    <div class="container">
        <div class="row">
            <div class="span4 center">
                <img alt="YOURLOGO" src="<?= Yii::app()->theme->baseUrl ?>/files/img/logo_footer.png">


            </div>
            <div class="span4">
                <p class="copyright text-center center">© 2013 Pixelio Land </p>
            </div>
            <div class="span4">
                <p class="copyright text-right center">
                    <a href="#">Ссылка</a> | <a href="#">Ссылка</a> | <a href="#">Ссылка</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER  -->
<!--[if lt IE 9]></div><![endif]-->


<!-- JAVA SCRIPTS  -->
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.js"></script>

<script src="angular/libs/angular.js"></script>
<script src="angular/controllers/SiteControllers.js"></script>
<script src="angular/modules/Config.js"></script>

<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/modernizr.js" type="text/javascript"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.scrollto.js"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/waypoints.js" type="text/javascript"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/custom.js" type="text/javascript"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/bootstrap.js"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.flexslider.js"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox-media.js" type="text/javascript"></script>
<script src="<?= Yii::app()->theme->baseUrl ?>/files/js/retina.js"></script>


</body></html>