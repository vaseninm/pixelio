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
		<!-- Set Viewport-->
		<meta name="viewport" content="user-scalable=no,initial-scale=1.0, maximum-scale=1.0 width=device-width" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/bootstrap.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/arcticmodal.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/bootstrap-responsive.css" type="text/css" media="screen" />
		
		<!--[if IE 8 ]>
		<link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style-ie.css" />
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
	<div id="overlay"></div>
<!-- Header div -->
	<header>
		<div class="container">
			<div id="logo"><a href="/"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/logoTop.png" alt="" class=""></a></div>
			<div id="contTopRight">
				<div id="top-phone"><p>+7 (905) 539-57-58</p></div>
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
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/108.jpg" alt="iphone" /></div>
				</div>
		<!-- /Slider No.2 -->
		<!-- Slider No.3 -->
				<div class="da-slide">
					<h1>Доступно для всех</h1>
					<p>3 основных пакета Дизайн-проектов. <br>Реальная и прозрачная ценовая политика.</p>
					<a href="#price" class="da-link gotarif">Выбрать пакет</a>
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/android.png" alt="image01" /></div>
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
					<p>Профессиональный дизайн интерьера. <br>Дизайн-студия Инны Азорской возьмёт на себя ВСЕ ваши проблемы с ремонтом!</p>
					<a href="#" class="da-link zayavka">Примеры работ</a>
					<div class="da-img"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/inna_azorskaya.jpg" alt="logo" /></div>
    	</div>
</div>
<!-- /Static Slide -->

<!-- Точка з -->
<div class="marginTop30" ng-controller="ContactController">
	<div class="container" id="zahvat">
		<div class="contact pull-left">
			<!-- Contact Form -->
			<form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
				 <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" ng-required="true" />
				 <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" ng-pattern="/^[0-9]+$/"/>
				 <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" ng-required="true"/>
				 <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" ng-disabled="ContactForm.$invalid" />
			</form>
			<div class="success" ng-show="sended">
				Заявка отправлена.
			</div>
		</div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
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
                <form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
                    <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" ng-required="true" />
                    <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" ng-pattern="/^[0-9]+$/" />
                    <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" ng-required="true" />
                    <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" ng-disabled="ContactForm.$invalid" />
                </form>
                <div class="success" ng-show="sended">
                    Заявка отправлена.
                </div>
            </div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
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
				<div class="boly-items" id="first-quote"><p>Дизайн-проект выражает ЭГО дизайнера а не Заказчика</p></div>
				<div class="boly-items"><p>ВСЕГДА есть опасения за качество выполненных работ на стройке.</p></div>
				<div class="boly-items"><p>Завышенные и необоснованные цены за строителей.</p></div>
				<div class="boly-items"><p>Срыв сроков - ЛЮБЫХ!</p></div>
				<div class="boly-items"><p>Все проблемы и пути их решения лежат на Хозяине квартиры.</p></div>				 
			</div>
		</div>
		<!-- / div -->
		
		<!-- div -->
		<div class="myWork-wrapper pull-right">
			<h2 class="good-title left-title greenH2">Как работаем мы</h2>
			<div class="myWork-items"><h4>Индивидуальный интерьер только под ВАС.</h4></div>
			<div class="myWork-items"><h4>Контроль качества работ на всех уровных.</h4></div>
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
					<div class="span12">
						<h2 class="jornalTitle">Август 2012</h2>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
					<div class="items" style="width:94%">
						<img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa1.jpg" alt="" />
						</div>
					</div>
					<div class="span8">
					<div class="items" style="width:94%">
						<img class="jornal2" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa100.jpg" alt="" />
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<h2 class="jornalTitle">Ноябрь 2009</h2>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
					<div class="items" style="width:94%">
						<img class="jornal" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa2.jpg" alt="" />
						</div>
					</div>
					<div class="span8">
					<div class="items" style="width:94%">
						<img class="jornal2" src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa200.jpg" alt="" />
						</div>
					</div>
				</div>
            </div>
            <div class="span5">
				<div class="items">
					<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/inna_azorskaya.jpg" alt="Инна Азорская" />
					<h3>Здравствуйте!<br> Меня зовут Инна Азорская, я владелица студии индивидуального дизайна <u>интерьеров класса премиум</u>.</h3>
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
				<p>Я, Инна Азорская, готова ответить на все вопросы по телефону в Москве, или обсудить предстоящий проект в формате личной встречи за чашечкой кофе в любое, удобное для Вас время.</p>
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
            <form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
                <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" ng-required="true" />
                <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" ng-pattern="/^[0-9]+$/" />
                <input type="text" name="comfortTime" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" ng-required="true" />
                <input type="submit" name="send-btn" class="btn1" value="Отправить заявку" ng-disabled="ContactForm.$invalid" />
            </form>
            <div class="success" ng-show="sended">
                Заявка отправлена.
            </div>
        </div>
		<!-- Subscription-form -->
		<div class="subscribe pull-right">
			<h2 class="zahvat-title">Оставьте вашу заявку</h2>
			<p>на проект и наш дизайнер свяжется с вами для обсуждения технического задания.</p>
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
				<h2>1600р./м<sup>2</sup></h2>
			</div>
			</div>
			<div class="span4 whiteBg" style="border-bottom:5px solid #BDBC2E">
			<div class="ribbon"></div>
			<div class="price">
				<img class="no-float" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/coin2.png" alt="Оптимальный" />
				<h2>Оптимальный</h2>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_doc2.png" alt="" class=""><b>Полный пакет документации для стройки</b></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_pic2.png" alt="" class=""><b>3D визуализация по всем основным помещениям</b></p>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_dollar.png" alt="" class=""><b>Просчёт стоимости материалов прямо в процессе проектирования</b></p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_shop.png" alt="" class=""><b>Поездки по магазинам для быстрого подбора отделочных материалов</b><br><br><br></p>
				<h2>1800р./м<sup>2</sup></h2>
			</div>
			</div>
			<div class="span4">
			<div class="price">
				<img class="no-float" src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/coin3.png" alt="Люкс дизайн" />
				<h2>Люкс дизайн</h2>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_star_s.png" alt="" class="">Авторская концепция дизайна с подбором мебели</p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_doc3.png" alt="" class="">Полный пакет документации для стройки</p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_pic3.png" alt="" class="">3D визуализация по всем основным помещениям, так же включая гардеробные и санузлы</p>						
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_map.png" alt="" class="">Выезд к заказчику с материалами, маркетинг всех выбранных позиций по Москве</p>
				<p class="subtittle clearfix"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icons/icon_star_e.png" alt="" class="">Декораторские работы на объекте<br><br><br></p>
				<h2>4000р./м<sup>2</sup></h2>
			</div>
			</div>
		</div>
		<h2 class="gray-title left-title">ОТ 12 ТЫС.РУБ. СТРОИТЕЛЬНЫЕ И ОТДЕЛОЧНЫЕ РАБОТЫ ПОД КЛЮЧ <br><span>(ЦЕНА НА 1 М<sup>2</sup> БЕЗ УЧЕТА СТОИМОСТИ МАТЕРИАЛОВ)</span></h2>
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
	<div class="container" id="holder1">
		
		<h2 class="cnt-title left-title">Наши заказчики о нас</h2>
		<div class="splitter"></div>
		<div class="row-fluid">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client1.jpg" alt="" class="">
				<p><br>Имя Фамилия Отчество<br> Москва</p>
			</div>
			<div class="span4">
				<div class="flexslider tablet">
                    <ul class="slides">
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1a.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1b.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c1c.jpg" alt=""></li>
                    </ul>
                </div>
			</div>
			<div class="span5">
				<p class="otziv">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client2.jpg" alt="" class="">
				<p><br>Имя Фамилия Отчество<br> Москва</p>
			</div>
			<div class="span4">
				<div class="flexslider tablet">
                    <ul class="slides">
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2a.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2b.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c2c.jpg" alt=""></li>
                    </ul>
                </div>
			</div>
			<div class="span5">
				<p class="otziv">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3 centered">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/client3.jpg" alt="" class="">
				<p><br>Имя Фамилия Отчество<br> Москва</p>
			</div>
			<div class="span4">
				<div class="flexslider tablet">
                    <ul class="slides">
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3a.jpg" alt=""></li>
						<li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3b.jpg" alt=""></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/clients/c3c.jpg" alt=""></li>
                    </ul>
                </div>
			</div>
			<div class="span5">
				<p class="otziv">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
	</div>
</section>


<!-- Команда -->
<section class="marginTop30 marginBottom30">
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
</section>


<!-- Модальное окно -->
<div style="display: none;">
    <div class="box-modal clearfix" id="actionModal" ng-controller="ContactController">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
		<h2 class="zahvat-title">Давайте встретимся</h2>
        <!-- Contact Form -->
		<form method="POST" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
			 <input type="text" name="name" class="fields name" placeholder="Ваше имя..." ng-model="leftContactModel.name" ng-required="true" />
			 <input type="text" name="phone" class="fields phone" placeholder="Ваш телефон..." ng-model="leftContactModel.phone" ng-required="true" ng-pattern="/^[0-9]+$/" />
			 <input type="text" name="time" class="fields time" placeholder="Удобное время звонка..." ng-model="leftContactModel.comfortTime" ng-required="true" />
			 <input type="submit" name="send-btn" class="btn1" value="Договориться о встрече" ng-disabled="ContactForm.$invalid" />
		</form>
		<div class="success" ng-show="sended">
			Заявка отправлена.
		</div>
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
	<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/custom.js"></script>
</body>
</html>
