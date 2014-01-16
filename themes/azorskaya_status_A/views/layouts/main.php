<?php
/* @var $this PxAngularController */
?>
<!DOCTYPE html>
<html ng-app='pixelio'>
<head ng-controller="SiteController">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Студия дизайна интерьеров Инны Азорской</title>
	<meta name="keywords" content="Профессиональный дизайн интерьера. Дизайн-студия Инны Азорской возьмёт на себя ВСЕ ваши проблемы с ремонтом! Индивидуальный интерьер только под Вас. Контроль качества работ на всех уровнях." />
	<meta name="description" content="Дизайн интерьер ремонт квартира студия дизайн-студия Инна Азорская дизайнер" />

	<link rel="shortcut icon" href="<?= Yii::app()->theme->baseUrl ?>/files/img/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/arcticmodal.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/fancybox.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style.css" type="text/css" media="screen"/>

    <!--Angular-->
    <script src="angular/libs/angular.js"></script>
    <script src="angular/controllers/SiteControllers.js"></script>
    <script src="angular/modules/Config.js"></script>

</head>
<body>
<div class="wrap">
    <table class="topTable">
        <tbody>
        <tr>
            <td class="aboutTable" id="jsMenu"><a href="#about">О нас</a></td>
            <td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t1.jpg"/></td>
            <td class="jobTable" id="jsMenu"><a href="#job">Примеры работ</a></td>
            <td class="clientTable" id="jsMenu"><a href="#client">Наши клиенты</a></td>
            <td class="formTable" colspan="2" valign="top">
                <div class="phone">+7 (905) 539 57 58</div>
                <div class="town">Москва и Московская область</div>
                <div class="email">info@azorskaya.ru</div>
                <div class="callMe clr"><a href="#" class="goFormModal">
                        <div class="cell">заказать обратный звонок</div>
                    </a></div>
            </td>
        </tr>
        <tr>
            <td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t2.jpg"/></td>
            <td class="servTable" id="jsMenu"><a href="#service">Услуги</a></td>
            <td class="inna" colspan="2"></td>
            <td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t3.jpg"/></td>
            <td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t4.jpg"/></td>
        </tr>
        <tr>
            <td class="d"></td>
            <td class="e"></td>
            <td class="s"></td>
            <td class="i"></td>
            <td class="g"></td>
            <td class="n"></td>
        </tr>
        </tbody>
    </table>
</div>

<section class="jornal" id="about">
    <div class="shadow"></div>
    <div class="wrap relative jornalSection clearfix">
        <div class="desc fl">Интерьер от известного дизайнера Инны Азорской …</div>
        <div class="desc2 fr">
            <p>Наша студия выполнит весь комплекс проектных и строительных работ по Вашей квартире, начиная от дизайна
                проекта и заканчивая Вашим переездом в новую квартиру.</p>
        </div>

        <div class="publications"></div>

        <div class="allPublication"><a href="#" id="allPublication"></a></div>

        <div class="publcTitle1"><a href="#" id="2013_08">Август 2013</a></div>
        <div class="publication1"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013.jpg"/>
        </div>

        <div class="publcTitle2"><a href="#" id="2013_03">Март 2013</a></div>
        <div class="publication2"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013.jpg"/>
        </div>

        <div class="publcTitle3"><a href="#" id="2013_02">Февраль 2013</a></div>
        <div class="publication3"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa02_2013.jpg"/>
        </div>

        <div class="publcTitle4"><a href="#" id="2012_08">Август 2012</a></div>
        <div class="publication4"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012.jpg"/>
        </div>

        <div class="publcTitle5"><a href="#" id="2009_11">Ноябрь 2009</a></div>
        <div class="publication5"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009.jpg"/>
        </div>

        <div class="publcTitle6"><a href="#" id="2008_11">Ноябрь 2008</a></div>
        <div class="publication6"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008.jpg"/>
        </div>

    </div>
</section>

<section class="triangle1"></section>

<section class="best">
    <div class="wrap">
        <h1>Наши преимущества</h1>

        <div class="clearfix bestContainer">
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best1.png"/>

                    <p>Более 50 реализованных проектов</p>
                </div>
            </div>
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best2.png"/>

                    <p>Публикации в известных журналах</p>
                </div>
            </div>
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best3.png"/>

                    <p>Профессионально подготовленная документация</p>
                </div>
            </div>
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best4.png"/>

                    <p>Индивидуальный - только Ваш дизайн интерьера</p>
                </div>
            </div>
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best5.png"/>

                    <p><span>6 лет опыта работы</span></p>
                </div>
            </div>
            <div class="fl">
                <div class="bestItem cell">
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/best6.png"/>

                    <p>Выдерживание сроков проектирования</p>
                </div>
            </div>
        </div>
        <a href="#" class="button1 goFormModal">
            <div class="cell">заказать обратный звонок</div>
        </a>
    </div>
</section>

<section class="price">
	<div class="wrap" id="service">
	<h1>Три основных пакета</h1>

	<h2>дизайн-проекта</h2>

	<div class="clearfix">
		<div class="flp">
			<div class="price1 cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/bazoviy.jpg"/>

				<h3>Базовый</h3>

				<p>(от 1600 – 2000 руб. м<sup>2</sup>)</p>

			</div>
		</div>
		<div class="flp">
			<div class="price2 zoom cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/optimal.jpg"/>

				<h3>Оптимальный</h3>

				<p>(от 2000 – 2500 руб. м<sup>2</sup>)</p>
			</div>
		</div>
		<div class="flp">
			<div class="price3 cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/lux.jpg"/>

				<h3>Люкс</h3>

				<p>(от 3600 – 4000 руб. м<sup>2</sup>)</p>
			</div>
		</div>
	</div>
	<div class="tableContainer" id="tableContainer">
		<div class="tableHide" id="tableHide">
			<table class="priceTable" id="priceTable">
				<tbody>
					<tr>
						<th class="titlePriceTable" colspan="2">Пакет услуг</th>
						<th class="bazoviyPriceTable">базовый</th>
						<th class="optimumPriceTable color">оптимальный</th>
						<th class="luxPriceTable">люкс</th>
					</tr>
					<tr>
						<td>1.</td>
						<td>Обмерный чертёж с привязкой иженерных коммуникаций</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Варианты планировочных решений с расстановкой условной мебели (3-6 вариантов) плюс итоговый вариант.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>3.</td>
						<td>План демонтажа перегородок.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>4.</td>
						<td>План возводимых перегородок с маркеровкой дверных проёмов.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>5.</td>
						<td>План помещения после перепланировки с размерами.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>6.</td>
						<td>План размещения санитарно-технического оборудования с привязкой выпусков и приложением монтажных чертежей от
							производителя.
						</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>7.</td>
						<td>План потолка с указанием типа используемого материала, отдельных узлов и сечений. (Количество чертежей зависит
							от уровня сложности потолка).
						</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>8.</td>
						<td>План размещения осветительных приборов, привязка выпусков освещения, план выключателей с указанием включения
							групп светильников.
						</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>9.</td>
						<td>План размещения электрических розеток с привязками размеров.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>10.</td>
						<td>План размещения электрического подогрева пола с привязкой регулятора.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>11.</td>
						<td>План пола с указанием: отметки уровня пола, типа напольного покрытия, рисунка и размеров. (Количество чертежей
							зависит от уровня сложности).
						</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>12.</td>
						<td>Экспликация напольных покрытий с указанием площади и артикула выбранного материала.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>13.</td>
						<td>Развертка стен с раскладкой плитки с указанием размеров, и площади выбранного материала.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>14.</td>
						<td>План расстановки выбранной мебели (мебель подбирается только в офисе исполнителя по каталогам и образцам).</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>15.</td>
						<td>Спецификация дверей с указанием размеров дверных проемов.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>16.</td>
						<td>Ведомость отделки.</td>
						<td class="plusM">
							<div></div>
						</td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>17.</td>
						<td>Просчет стоимости материалов.</td>
						<td></td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>18.</td>
						<td>Поездки по магазинам для быстрого подбора отделочных материалов (не более 7).</td>
						<td></td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>19.</td>
						<td>3D визуализация по 3-м основным помещениям.</td>
						<td></td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>20.</td>
						<td>Эксклюзивный дизайн интерьера.</td>
						<td></td>
						<td class="color plusB">
							<div></div>
						</td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>21.</td>
						<td>Выезды к заказчику с материалами (в т.числе и в выходные).</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>22.</td>
						<td>Эскизы всех помещений интерьера включая санузлы и прихожие в 3D (Фотореалистичное изображение).</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>23.</td>
						<td>Эскизы индивидуальной мебели, светильников изготавливаемых на заказ.</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>24.</td>
						<td>Схемы, чертежи, развертки нестандартных изделий (настенных панелей, дверей, шкафов и прочего).</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>25.</td>
						<td>Декораторские работы на объекте (Текстиль, отрисовка штор, подбор карнизов, выезды с тканями на объект и т.
							д.).
						</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>26.</td>
						<td>Авторская концепция дизайна с индивидуальным подбором мебели, аксессуаров и эксклюзивных материалов.</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<tr>
						<td>27.</td>
						<td>Авторский надзор “(это означает что плитка в Вашем доме будет лежать именно так, как было задумано. Полный
							контроль качества)”.
						</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM">
							<div></div>
						</td>
					</tr>
					<!--<tr>
						<td>28.</td>
						<td>Маркетинг покупки всех отделочных материалов по г.Москва.</td>
						<td></td>
						<td class="color plusB"></td>
						<td class="plusM"><div></div></td>
					</tr>-->
				</tbody>
			</table>
		</div>
		<div class="tableShow clearfix" id="tableShow">
			<div class="viewAll">
				<a href="#" class="btn-slide" id="btn-slide">смотреть все услуги</a>
			</div>
			<div class="arrow3 fr trianglM" id="arrow3">
				<div></div>
			</div>
			<div class="arrow2 fr color trianglB" id="arrow2">
				<div></div>
			</div>
			<div class="arrow1 fr trianglM" id="arrow1">
				<div></div>
			</div>
		</div>
	</div>
	<div class="priceForm horizontal clearfix" ng-controller="ContactController">
		<form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
			<fieldset>
				<div class="fl">
					<label for="name">Введите Ваше имя:*</label>
					<input type="text" value="" id="" name="name" class="text" ng-model="leftContactModel.name" ng-required="true" />
				</div>
				<div class="fr">
					<label for="phone">Введите телефон:*</label>
					<input type="text" value="" id="" name="phone" class="text" ng-model="leftContactModel.phone" ng-required="true" />
				</div>
				<div class="clr">
					<input type="submit" class="buttonForm" value="Отправить нам заявку"/>
				</div>
			</fieldset>
		</form>
		<!-- Модальное окно success -->
		<div class="modal-overlay" ng-show="sended" ng-click="clearSended($event)">
			<div class="modal-container">
				<table class="modal-container_i">
					<tbody>
						<tr>
							<td class="modal-container_i2">
								<div class="box-modal clearfix" id="successFormModal">
									<div class="box-modal_close" ng-click="clearSended($event)"></div>
									<!-- Content Container -->
									<section class="contactFormModalContent">
										<!-- Content -->
										<div class="contactFormModalSuccess2">
											<h1 class="modSucc">Спасибо за вашу заявку</h1>
											<h2 class="modSucc">наш дизайнер в ближайшее время</h2>
											<p class="modSucc">свяжется с вами</p>
										</div>
										<!-- /Content -->
									</section>
									<!-- /Content Container -->
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="coffe">
    <div class="wrap clearfix">
        <h1>Как сделать заказ</h1>

        <div class="stepBlock fl">
            <div class="fl">
                <div class="step1">Оставить заявку</div>
            </div>
            <div class="fl">
                <div class="step2">Выслать по e-mail план и обсудить техническое<br>задание</div>
            </div>
            <div class="fl relative">
                <div class="step3">Получить <br>3 варианта планировки
                    <div class="ribbon"></div>
                </div>
            </div>
            <div class="fl">
                <div class="step4">Встреча на <br>объекте, замеры, подписание <br>договора</div>
            </div>
            <div class="fl">
                <div class="step5">Разработка <br>дизайн-проекта, согласно опциям выбранного <br>дизайн-пакета</div>
            </div>
            <div class="fl">
                <div class="step6">Утверждение визуализаций</div>
            </div>
            <div class="fl">
                <div class="step7">Составление строительной <br>сметы, <br><span>а также маркетинг выбранных отделочных материалов</span>
                </div>
            </div>
        </div>
        <div class="txt fl">Для Вашего удобства мы можем обсудить Ваш проект в формате встречи, поэтому предлагаем
            встретиться за чашечкой кофе в Москве и обсудить возможность сотрудничества.
        </div>
        <a href="#" class="button fl goFormModal">
            <div class="cell">встретится за кофе</div>
        </a>
    </div>
</section>

<section class="triangle2 job" id="job">
<div class="wrap clearfix">
<h1>Наши работы</h1>
<!-- Блок одной галереи -->
<div class="fl">
    <div class="itemJob">
        <div class="coverJob">
            <div class="cell"><a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/01.jpg"
                                 class="fancybox-media" data-title-id="title-1-1" rel="portfolio1">смотреть
                    подробности</a></div>
        </div>
        <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/job/thumb_job_1.jpg"/>
    </div>
    <p class="jobDesc">Жилой дом в поселке Павлово площадью 530 м<sup>2</sup></p>

    <div class="hiddenGalery">
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/02.jpg" class="fancybox-media"
           data-title-id="title-1-2" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/03.jpg" class="fancybox-media"
           data-title-id="title-1-3" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/04.jpg" class="fancybox-media"
           data-title-id="title-1-4" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/05.jpg" class="fancybox-media"
           data-title-id="title-1-5" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/06.jpg" class="fancybox-media"
           data-title-id="title-1-6" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/07.jpg" class="fancybox-media"
           data-title-id="title-1-7" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/08.jpg" class="fancybox-media"
           data-title-id="title-1-8" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/09.jpg" class="fancybox-media"
           data-title-id="title-1-9" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/10.jpg" class="fancybox-media"
           data-title-id="title-1-10" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/11.jpg" class="fancybox-media"
           data-title-id="title-1-11" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/12.jpg" class="fancybox-media"
           data-title-id="title-1-12" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/13.jpg" class="fancybox-media"
           data-title-id="title-1-13" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/14.jpg" class="fancybox-media"
           data-title-id="title-1-14" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/15.jpg" class="fancybox-media"
           data-title-id="title-1-15" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/16.jpg" class="fancybox-media"
           data-title-id="title-1-16" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/17.jpg" class="fancybox-media"
           data-title-id="title-1-17" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/18.jpg" class="fancybox-media"
           data-title-id="title-1-18" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/19.jpg" class="fancybox-media"
           data-title-id="title-1-19" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/20.jpg" class="fancybox-media"
           data-title-id="title-1-20" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/21.jpg" class="fancybox-media"
           data-title-id="title-1-21" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/22.jpg" class="fancybox-media"
           data-title-id="title-1-22" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/23.jpg" class="fancybox-media"
           data-title-id="title-1-23" rel="portfolio1">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_1/24.jpg" class="fancybox-media"
           data-title-id="title-1-24" rel="portfolio1">&nbsp;</a>

        <div id="title-1-1" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №1</h2>
            <div class="fancybody">Лестница – спираль, плавно соединяет два этажа.</div>
        </div>
        <div id="title-1-2" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №2</h2>
            <div class="fancybody">Витраж на двери дополняет легкость холла.</div>
        </div>
        <div id="title-1-3" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №3</h2>
            <div class="fancybody">Напольная плитка подчеркивает зону отдыха.</div>
        </div>
        <div id="title-1-4" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №4</h2>
            <div class="fancybody">Оригинальные двери отделяют гостиную и кухню.</div>
        </div>
        <div id="title-1-5" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №5</h2>
            <div class="fancybody">Камин добавляет гостиной уют.</div>
        </div>
        <div id="title-1-6" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №6</h2>
            <div class="fancybody">Белая кухонная мебель придает легкости и света в интерьере</div>
        </div>
        <div id="title-1-7" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №7</h2>
            <div class="fancybody">Приятная цветовая гамма построена на комбинациях спокойных и теплых оттенков.</div>
        </div>
        <div id="title-1-8" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №8</h2>
            <div class="fancybody">Нестандартное цветовое решение столовой.</div>
        </div>
        <div id="title-1-9" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №9</h2>
            <div class="fancybody">Интерьер зрительно объединен общей концепцией цветового дизайна.</div>
        </div>
        <div id="title-1-10" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №10</h2>
            <div class="fancybody">Оригинальное решение подголовника кровати.</div>
        </div>
        <div id="title-1-11" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №11</h2>
            <div class="fancybody">Светлое, наполненное воздухом пространство, манит отдохнуть после рабочего дня.</div>
        </div>
        <div id="title-1-12" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №12</h2>
            <div class="fancybody">Плавные переходы стен позволили сохранить чистоту линий.</div>
        </div>
        <div id="title-1-13" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №13</h2>
            <div class="fancybody">Элементы узоров на стене подчеркивают целостность образа.</div>
        </div>
        <div id="title-1-14" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №14</h2>
            <div class="fancybody">Обилие дневного света, поддержанного цветовой гаммой, добавляет ощущения легкости</div>
        </div>
        <div id="title-1-15" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №15</h2>
            <div class="fancybody">Особым акцентом стала люстра, прекрасно дополненная настольной лампой.</div>
        </div>
        <div id="title-1-16" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №16</h2>
            <div class="fancybody">Цветовая гамма создает эффект таинственности и теплоты.</div>
        </div>
        <div id="title-1-17" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №17</h2>
            <div class="fancybody">Оригинальное сочетание японских мотивов.</div>
        </div>
        <div id="title-1-18" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №18</h2>
            <div class="fancybody">Интерьер выдержан в едином стиле и колористической гамме.</div>
        </div>
        <div id="title-1-19" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №19</h2>
            <div class="fancybody">Необычное решение потолка.</div>
        </div>
        <div id="title-1-20" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №20</h2>
            <div class="fancybody">Четкие геометрические формы предметов мебели, выигрышно подчеркнуты цветовой гаммой кабинета.</div>
        </div>
        <div id="title-1-21" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №21</h2>
            <div class="fancybody">Ванная комната выдержана в чистых, светлых тонах.</div>
        </div>
        <div id="title-1-22" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №22</h2>
            <div class="fancybody">Оригинальное решение душевой кабины.</div>
        </div>
        <div id="title-1-23" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №23</h2>
            <div class="fancybody">Просторная ванная комната оформлена с изяществом.</div>
        </div>
        <div id="title-1-24" class="info hidden">
            <h2>Жилой дом в поселке Павлово площадью 530 м<sup>2</sup> №24</h2>
            <div class="fancybody">Золотые мотивы прекрасно подчеркивают легкость.</div>
        </div>
    </div>
</div>
<!-- /Блок одной галереи -->

<!-- Блок одной галереи -->
<div class="fl">
    <div class="itemJob">
        <div class="coverJob">
            <div class="cell"><a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/01.jpg"
                                 class="fancybox-media" data-title-id="title-2-1" rel="portfolio2">смотреть
                    подробности</a></div>
        </div>
        <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/job/thumb_job_2.jpg"/>
    </div>
    <p class="jobDesc">Деревянный дом в Подмосковье площадью 200 м<sup>2</sup></p>

    <div class="hiddenGalery">
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/02.jpg" class="fancybox-media"
           data-title-id="title-2-2" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/03.jpg" class="fancybox-media"
           data-title-id="title-2-3" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/04.jpg" class="fancybox-media"
           data-title-id="title-2-4" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/05.jpg" class="fancybox-media"
           data-title-id="title-2-5" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/06.jpg" class="fancybox-media"
           data-title-id="title-2-6" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/07.jpg" class="fancybox-media"
           data-title-id="title-2-7" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/08.jpg" class="fancybox-media"
           data-title-id="title-2-8" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/09.jpg" class="fancybox-media"
           data-title-id="title-2-9" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/10.jpg" class="fancybox-media"
           data-title-id="title-2-10" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/11.jpg" class="fancybox-media"
           data-title-id="title-2-11" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/12.jpg" class="fancybox-media"
           data-title-id="title-2-12" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/13.jpg" class="fancybox-media"
           data-title-id="title-2-13" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/14.jpg" class="fancybox-media"
           data-title-id="title-2-14" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/15.jpg" class="fancybox-media"
           data-title-id="title-2-15" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/16.jpg" class="fancybox-media"
           data-title-id="title-2-16" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/17.jpg" class="fancybox-media"
           data-title-id="title-2-17" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/18.jpg" class="fancybox-media"
           data-title-id="title-2-18" rel="portfolio2">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_2/19.jpg" class="fancybox-media"
           data-title-id="title-2-19" rel="portfolio2">&nbsp;</a>

        <div id="title-2-1" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №1</h2>
            <div class="fancybody">Белые глянцевые фасады мебели столовой подчеркивают цвет стен.</div>
        </div>
        <div id="title-2-2" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №2</h2>
            <div class="fancybody">Столовую от гостиной отделяет перегородка с большим проемом.</div>
        </div>
        <div id="title-2-3" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №3</h2>
            <div class="fancybody">Текстиль «яблочного» цвета штор, мебели освежает интерьер.</div>
        </div>
        <div id="title-2-4" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №4</h2>
            <div class="fancybody">Тепло и уют создают в гостиной камин.</div>
        </div>
        <div id="title-2-5" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №5</h2>
            <div class="fancybody">Легкий современный интерьер наполнен воздухом и светом.</div>
        </div>
        <div id="title-2-6" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №6</h2>
            <div class="fancybody">Хорошую освещенность гостиной обеспечивают панорамные окна.</div>
        </div>
        <div id="title-2-7" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №7</h2>
            <div class="fancybody">Пол в холе отделан керамогранитом в цвет стен.</div>
        </div>
        <div id="title-2-8" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №8</h2>
            <div class="fancybody">Цветовое решение деревянной лестницы построено на контрасте.</div>
        </div>
        <div id="title-2-9" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №9</h2>
            <div class="fancybody">Диагональная укладка пола холла второго этажа позволяет визуально расширить пространство.</div>
        </div>
        <div id="title-2-10" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №10</h2>
            <div class="fancybody">Текстиль зеленного цвета гармонично сочетается с натуральным цветом стен.</div>
        </div>
        <div id="title-2-11" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №11</h2>
            <div class="fancybody">Диагональная укладка деревянного пола придает динамику интерьеру.</div>
        </div>
        <div id="title-2-12" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №12</h2>
            <div class="fancybody">Деревянные стены покрыты краской молочного оттенка.</div>
        </div>
        <div id="title-2-13" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №13</h2>
            <div class="fancybody">На фоне пастельных тонов стен выгодно смотрятся брусничные оттенки текстиля.</div>
        </div>
        <div id="title-2-14" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №14</h2>
            <div class="fancybody">Одна из основных особенностей визуального решения интерьера – контрасты.</div>
        </div>
        <div id="title-2-15" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №15</h2>
            <div class="fancybody">Комната выдержана в строгом современном стиле.</div>
        </div>
        <div id="title-2-16" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №16</h2>
            <div class="fancybody">Ярким акцентом комнаты стал текстиль красного цвета.</div>
        </div>
        <div id="title-2-17" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №17</h2>
            <div class="fancybody">Изящная люстра украшает потолок комнаты.</div>
        </div>
        <div id="title-2-18" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №18</h2>
            <div class="fancybody">Стены и пол ванной комнаты защищены кафельной плиткой.</div>
        </div>
        <div id="title-2-19" class="info hidden">
            <h2>Деревянный дом в Подмосковье площадью 200 м<sup>2</sup> №19</h2>
            <div class="fancybody">Цветовое решение ванной комнаты повторяет общее настроение дома.</div>
        </div>
    </div>
</div>
<!-- /Блок одной галереи -->

<!-- Блок одной галереи -->
<div class="fl">
    <div class="itemJob">
        <div class="coverJob">
            <div class="cell"><a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/01.jpg"
                                 class="fancybox-media" data-title-id="title-3-1" rel="portfolio3">смотреть
                    подробности</a></div>
        </div>
        <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/job/thumb_job_3.jpg"/>
    </div>
    <p class="jobDesc">Квартира в Москве площадью 60 м<sup>2</sup></p>

    <div class="hiddenGalery">
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/02.jpg" class="fancybox-media"
           data-title-id="title-3-2" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/03.jpg" class="fancybox-media"
           data-title-id="title-3-3" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/04.jpg" class="fancybox-media"
           data-title-id="title-3-4" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/05.jpg" class="fancybox-media"
           data-title-id="title-3-5" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/06.jpg" class="fancybox-media"
           data-title-id="title-3-6" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/07.jpg" class="fancybox-media"
           data-title-id="title-3-7" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/08.jpg" class="fancybox-media"
           data-title-id="title-3-8" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/09.jpg" class="fancybox-media"
           data-title-id="title-3-9" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/10.jpg" class="fancybox-media"
           data-title-id="title-3-10" rel="portfolio3">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_3/11.jpg" class="fancybox-media"
           data-title-id="title-3-11" rel="portfolio3">&nbsp;</a>

        <div id="title-3-1" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №1</h2>
            <div class="fancybody">Глянцевые зеркальные двери визуально увеличивают холл.</div>
        </div>
        <div id="title-3-2" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №2</h2>
            <div class="fancybody">Оригинальное цветовое решение удачно сочетается с оттенком декоративных элементов.</div>
        </div>
        <div id="title-3-3" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №3</h2>
            <div class="fancybody">Удобный диван условно делит помещение на гостиную и кухню.</div>
        </div>
        <div id="title-3-4" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №4</h2>
            <div class="fancybody">Пластика пространства подчеркнута мягкими формами настенного рисунка.</div>
        </div>
        <div id="title-3-5" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №5</h2>
            <div class="fancybody">Кухня привлекает внимание необычным цветовым решением.</div>
        </div>
        <div id="title-3-6" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №6</h2>
            <div class="fancybody">Оригинальное решение расположения телевизионной мебели.</div>
        </div>
        <div id="title-3-7" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №7</h2>
            <div class="fancybody">Удачное сочетание цветов и фактуры.</div>
        </div>
        <div id="title-3-8" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №8</h2>
            <div class="fancybody">Общее колористическое решение подчеркивает объем комнаты.</div>
        </div>
        <div id="title-3-9" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №9</h2>
            <div class="fancybody">Спальня решена максимально функционально и лаконично.</div>
        </div>
        <div id="title-3-10" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №10</h2>
            <div class="fancybody">Пространство спальни смоделировано так, что его отдельные элементы вместе составляют гармоничное целое.</div>
        </div>
        <div id="title-3-11" class="info hidden">
            <h2>Квартира в Москве площадью 60 м<sup>2</sup> №11</h2>
            <div class="fancybody">Гармоничное решение шкафа подчеркивает уют и функциональность интерьера.</div>
        </div>
    </div>
</div>
<!-- /Блок одной галереи -->

<div class="clr"></div>

<!-- Блок одной галереи -->
<div class="fl">
    <div class="itemJob">
        <div class="coverJob">
            <div class="cell"><a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/01.jpg"
                                 class="fancybox-media" data-title-id="title-4-1" rel="portfolio4">смотреть
                    подробности</a></div>
        </div>
        <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/job/thumb_job_4.jpg"/>
    </div>
    <p class="jobDesc">Квартира в Дубне площадью 130 м<sup>2</sup></p>

    <div class="hiddenGalery">
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/02.jpg" class="fancybox-media"
           data-title-id="title-4-2" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/03.jpg" class="fancybox-media"
           data-title-id="title-4-3" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/04.jpg" class="fancybox-media"
           data-title-id="title-4-4" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/05.jpg" class="fancybox-media"
           data-title-id="title-4-5" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/06.jpg" class="fancybox-media"
           data-title-id="title-4-6" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/07.jpg" class="fancybox-media"
           data-title-id="title-4-7" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/08.jpg" class="fancybox-media"
           data-title-id="title-4-8" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/09.jpg" class="fancybox-media"
           data-title-id="title-4-9" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/10.jpg" class="fancybox-media"
           data-title-id="title-4-10" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/11.jpg" class="fancybox-media"
           data-title-id="title-4-11" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/12.jpg" class="fancybox-media"
           data-title-id="title-4-12" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/13.jpg" class="fancybox-media"
           data-title-id="title-4-13" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/14.jpg" class="fancybox-media"
           data-title-id="title-4-14" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/15.jpg" class="fancybox-media"
           data-title-id="title-4-15" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/16.jpg" class="fancybox-media"
           data-title-id="title-4-16" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/17.jpg" class="fancybox-media"
           data-title-id="title-4-17" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/18.jpg" class="fancybox-media"
           data-title-id="title-4-18" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/19.jpg" class="fancybox-media"
           data-title-id="title-4-19" rel="portfolio4">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_4/20.jpg" class="fancybox-media"
           data-title-id="title-4-20" rel="portfolio4">&nbsp;</a>

        <div id="title-4-1" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №1</h2>
            <div class="fancybody">Основной цветовой гаммой квартиры стали все оттенки от белого до карамельного.</div>
        </div>
        <div id="title-4-2" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №2</h2>
            <div class="fancybody">Ярким акцентом в холе стал витраж дверей гардеробной.</div>
        </div>
        <div id="title-4-3" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №3</h2>
            <div class="fancybody">Ярким акцентом в коридоре стал витраж двери в гостиную.</div>
        </div>
        <div id="title-4-4" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №4</h2>
            <div class="fancybody">В гостиной выделены две зоны: зона отдыха, столовая зона.</div>
        </div>
        <div id="title-4-5" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №5</h2>
            <div class="fancybody">Стена, окрашенная в цвет морской волны, выделяет зону отдыха гостиной.</div>
        </div>
        <div id="title-4-6" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №6</h2>
            <div class="fancybody">Ковер, навесная полка поддерживают цвет стены в зоне отдыха гостиной. </div>
        </div>
        <div id="title-4-7" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №7</h2>
            <div class="fancybody">Большой комфортный диван с мягкими подушками располагает к отдыху.</div>
        </div>
        <div id="title-4-8" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №8</h2>
            <div class="fancybody">Цвет морской волны плавно перетекает в цвет мебели столовой зоны гостиной.</div>
        </div>
        <div id="title-4-9" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №9</h2>
            <div class="fancybody">Ярким цветовым акцентом стали красные фасады корпусной мебели кухни.</div>
        </div>
        <div id="title-4-10" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №10</h2>
            <div class="fancybody">Кухню от гостиной отделяют раздвижные двери из матового стекла.</div>
        </div>
        <div id="title-4-11" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №11</h2>
            <div class="fancybody">Необычной формы барные стулья подчеркивают современность интерьера.</div>
        </div>
        <div id="title-4-12" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №12</h2>
            <div class="fancybody">Детская комната для девочки напоминает цветущий сад.</div>
        </div>
        <div id="title-4-13" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №13</h2>
            <div class="fancybody">Тема цветов повторяется на обоях, текстиле штор, пастельного белья.</div>
        </div>
        <div id="title-4-14" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №14</h2>
            <div class="fancybody">Главным украшением комнаты стала необычная люстра-шар.</div>
        </div>
        <div id="title-4-15" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №15</h2>
            <div class="fancybody">Пастельные тона в детской комнате для мальчика разбавила зелено-голубая гамма текстиля.</div>
        </div>
        <div id="title-4-16" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №16</h2>
            <div class="fancybody">Рабочее место имеет хорошее естественное освещение.</div>
        </div>
        <div id="title-4-17" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №17</h2>
            <div class="fancybody">Стены в зоне отдыха детской для мальчика оклеены современными яркими обоями.</div>
        </div>
        <div id="title-4-18" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №18</h2>
            <div class="fancybody">Ярким акцентом спальной комнаты стало кресло красного цвета.</div>
        </div>
        <div id="title-4-19" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №19</h2>
            <div class="fancybody">Спальное место выделено нишей в стене и потолке серо-голубого цвета.</div>
        </div>
        <div id="title-4-20" class="info hidden">
            <h2>Квартира в Дубне площадью 130 м<sup>2</sup> №20</h2>
            <div class="fancybody">Общее настроение спальной комнаты поддерживает текстиль штор, пастельного белья.</div>
        </div>
    </div>
</div>
<!-- /Блок одной галереи -->

<!-- Блок одной галереи -->
<div class="fl">
    <div class="itemJob">
        <div class="coverJob">
            <div class="cell"><a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/01.jpg"
                                 class="fancybox-media" data-title-id="title-5-1" rel="portfolio5">смотреть
                    подробности</a></div>
        </div>
        <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/job/thumb_job_5.jpg"/>
    </div>
    <p class="jobDesc">Квартира в Москве, площадь 125 м<sup>2</sup></p>

    <div class="hiddenGalery">
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/02.jpg" class="fancybox-media"
           data-title-id="title-5-2" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/03.jpg" class="fancybox-media"
           data-title-id="title-5-3" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/04.jpg" class="fancybox-media"
           data-title-id="title-5-4" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/05.jpg" class="fancybox-media"
           data-title-id="title-5-5" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/06.jpg" class="fancybox-media"
           data-title-id="title-5-6" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/07.jpg" class="fancybox-media"
           data-title-id="title-5-7" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/08.jpg" class="fancybox-media"
           data-title-id="title-5-8" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/09.jpg" class="fancybox-media"
           data-title-id="title-5-9" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/10.jpg" class="fancybox-media"
           data-title-id="title-5-10" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/11.jpg" class="fancybox-media"
           data-title-id="title-5-11" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/12.jpg" class="fancybox-media"
           data-title-id="title-5-12" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/13.jpg" class="fancybox-media"
           data-title-id="title-5-13" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/14.jpg" class="fancybox-media"
           data-title-id="title-5-14" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/15.jpg" class="fancybox-media"
           data-title-id="title-5-15" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/16.jpg" class="fancybox-media"
           data-title-id="title-5-16" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/17.jpg" class="fancybox-media"
           data-title-id="title-5-17" rel="portfolio5">&nbsp;</a>
        <a href="<?= Yii::app()->theme->baseUrl ?>/files/img/job/job_5/18.jpg" class="fancybox-media"
           data-title-id="title-5-18" rel="portfolio5">&nbsp;</a>

        <div id="title-5-1" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №1</h2>
            <div class="fancybody">Квартира оформлена в современном классическом стиле.</div>
        </div>
        <div id="title-5-2" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №2</h2>
            <div class="fancybody">Гостиную от холла отделяет современная дверь из матового стекла с диагональным рисунком.</div>
        </div>
        <div id="title-5-3" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №3</h2>
            <div class="fancybody">Ниши с подсвечниками задают ритм.</div>
        </div>
        <div id="title-5-4" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №4</h2>
            <div class="fancybody">Теплоту пространству придают натуральные оттенки  деревянного пола, мебели столовой зоны гостиной.</div>
        </div>
        <div id="title-5-5" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №5</h2>
            <div class="fancybody">Органично вписалось фортепиано в столовой зоне гостиной.</div>
        </div>
        <div id="title-5-6" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №6</h2>
            <div class="fancybody">Особую атмосферу в гостиной задает зеркальная стена.</div>
        </div>
        <div id="title-5-7" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №7</h2>
            <div class="fancybody">Гостиная столовая кухня объединены в единое помещение, что позволило создать максимально комфортное пространство.</div>
        </div>
        <div id="title-5-8" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №8</h2>
            <div class="fancybody">Цветовое решение рабочей зоны выдержано в контрастной ахроматической  гамме.</div>
        </div>
        <div id="title-5-9" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №9</h2>
            <div class="fancybody">Темный цвет пола, шторы бронзового оттенка дополняют палитру интерьера.</div>
        </div>
        <div id="title-5-10" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №10</h2>
            <div class="fancybody">Мебель в комнате выдержана в едином стиле.</div>
        </div>
        <div id="title-5-11" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №11</h2>
            <div class="fancybody">Общее настроение комнаты задает розовый цвет стен.</div>
        </div>
        <div id="title-5-12" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №12</h2>
            <div class="fancybody">Спальная комната выдержана в спокойной благородной цветовой гамме.</div>
        </div>
        <div id="title-5-13" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №13</h2>
            <div class="fancybody">Зеркальные дверь визуально увеличивают комнату.</div>
        </div>
        <div id="title-5-14" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №14</h2>
            <div class="fancybody">Цветовое решение ванной комнаты повторяет общее настроение квартиры.</div>
        </div>
        <div id="title-5-15" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №15</h2>
            <div class="fancybody">Скульптурные формы сантехники подчеркнуты отделкой стен в спокойной цветовой гамме.</div>
        </div>
        <div id="title-5-16" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №16</h2>
            <div class="fancybody">Оборудование ванной комнаты спрятано во встроенном шкафу.</div>
        </div>
        <div id="title-5-17" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №17</h2>
            <div class="fancybody">Натуральный темный цвет плетенной корзины дополняет общую палитру помещения.</div>
        </div>
        <div id="title-5-18" class="info hidden">
            <h2>Квартира в Москве, площадь 125 м<sup>2</sup> №18</h2>
            <div class="fancybody">Яркое контрастное цветовое решение для санитарного узла.</div>
        </div>
    </div>
</div>
<div class="fl">
    <div class="jobForm" ng-controller="ContactController">
        <div class="titleForm">Напишите нам</div>
        <form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
            <fieldset>
                <label for="name">Введите Ваше имя:*</label>
                <input type="text" value="" id="" name="name" class="text" ng-model="leftContactModel.name" ng-required="true" />
                <label for="phone">Введите телефон:*</label>
                <input type="text" value="" id="" name="phone" class="text"  ng-model="leftContactModel.phone" ng-required="true" />
                <label for="text">Сообщение:*</label>
                <textarea name="text" class="text" ng-model="leftContactModel.text"></textarea>

                <div class="cell">
                    <input type="submit" class="buttonForm" value="Отправить"/>
                </div>
            </fieldset>
        </form>
		<!-- Модальное окно success -->
		<div class="modal-overlay" ng-show="sended" ng-click="clearSended($event)">
			<div class="modal-container">
				<table class="modal-container_i">
					<tbody>
						<tr>
							<td class="modal-container_i2">
								<div class="box-modal clearfix" id="successFormModal">
									<div class="box-modal_close" ng-click="clearSended($event)"></div>
									<!-- Content Container -->
									<section class="contactFormModalContent">
										<!-- Content -->
										<div class="contactFormModalSuccess2">
											<h1 class="modSucc">Спасибо за вашу заявку</h1>
											<h2 class="modSucc">наш дизайнер в ближайшее время</h2>
											<p class="modSucc">свяжется с вами</p>
										</div>
										<!-- /Content -->
									</section>
									<!-- /Content Container -->
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
    </div>
</div>
</div>
</section>

<section class="zakaz triangle3" id="zakaz">
    <div class="wrap clearfix">
        <h1>Закажите дизайн-проект сегодня и вы получите</h1>

        <div class="fl">
            <div class="youHave relative">
                <div class="ribbon"></div>
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icon_att.png"/>

                <p>Бесплатно<br>3 варианта планировки.</p>
            </div>
        </div>
        <div class="fl">
            <div class="youHave2">
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icon_smile.png"/>

                <p>Индивидуальный интерьер, только под Ваши требования.</p>
            </div>
        </div>
        <div class="fl">
            <div class="youHave">
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icon_doc.png"/>

                <p>Качественная проектная документация.</p>
            </div>
        </div>
        <div class="clr"></div>
        <div class="fl">
            <div class="youHave">
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icon_circle.png"/>

                <p>Гарантия эксклюзивности дизайн-проекта!</p>
            </div>
        </div>
        <div class="fl">
            <div class="youHave3">
                <p>Расчёт сметы, а также скидки дизайнера на отделочные материалы у партнёров поставщиков.</p>
            </div>
        </div>
        <div class="fl">
            <div class="youHave">
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/icon_clock.png"/>

                <p>Соблюдение сроков проектирования.</p>
            </div>
        </div>
        <div class="clr call">
            <a class="button2 goFormModal" href="#">
                <div class="cell">заказать звонок</div>
            </a>
        </div>
    </div>
</section>

<section class="client" id="client">
    <div class="wrap">
        <h1>Наши клиенты</h1>

        <div class="clientContainer">
            <div class="fl">
                <div class="clientPhoto">
                    <div class="coverClient"></div>
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/client1.jpg"/>
                </div>
                <p class="clientName">Анна Княжева, г. Москва</p>
            </div>
            <div class="fr">
                <div class="clientGalery">
                    <ul>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/01.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/02.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/03.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/04.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/05.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client1/06.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="clientDesc">
                <p>
                    Купив квартиру в новом доме со свободной планировкой, я была полна решимости реализовать свои
                    задумки своими собственными силами.
                    Но первый раз придя в нее, я поняла - всё не совсем так просто, как казалось раньше.
                    Бетонная коробка с монолитными столбами посередине, свободная планировка. Из двухкомнатной квартиры
                    вполне реально было сделать трёшку.
                    Площадь позволяла, но окна было всего три!!! Решила всё-таки воспользоваться услугами
                    архитектора-дизайнера по совету родственников.
                    Не пожалела ни секунды. Переговорив с Инной, и рассказав ей все пожелания, я получила всё, что я
                    хотела: из двушки - трёхкомнатную квартиру,
                    с гардеробной, кладовой, двумя санузлами  и рабочим местом, скрытым зеркальной дверью, в гостинной.
                    Обсудив стиль, который я хочу, и цвета,
                    которые хотела бы видеть в интерьере, я получила визуализации по всем комнатам, что очень удобно,
                    когда выбираешь материалы и мебель.
                    <br>
                    С Инной приятно работать, она умеет слушать, и что самое главное, услышать и принять во внимание
                    пожелания клиента.
                    Что немаловажно, т. к. у меня уже имелся опыт общения с дизайнером, точнее у моих родителей, в
                    результате которого у себя в квартире они увидели не то,
                    что хотели сами, а то, что хотел он. Искренне надеюсь, что наше сотрудничество с Инной продолжится и
                    дальше, если мы когда-нибудь решим построить дом...;)))
                </p>
            </div>
        </div>
        <div class="clientContainer">
            <div class="fl">
                <div class="clientPhoto">
                    <div class="coverClient"></div>
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/client2.jpg"/>
                </div>
                <p class="clientName">Сафронова Екатерина, г. Москва</p>
            </div>
            <div class="fr">
                <div class="clientGalery">
                    <ul>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/01.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/02.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/03.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/04.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/05.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/06.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="clientDesc">
                <p>
                    Концепция ремонта квартиры свободной планировки площадью 114 мкв вынашивалась в течение нескольких
                    лет.
                    За это время был выбран стиль и требования к функциональным особенностям квартиры.
                    Сочетание собственных идей со свежим и профессиональным взглядом дизайнера-архитектора
                    Инны Азорской сделало процесс поиска конкретных решений по дизайну квартиры творческим и приятным.
                    Концепцию получившегося дизайн-проекта можно сформулировать так: «современный стиль со смелыми
                    цветовыми и
                    архитектурными акцентами при максимальной функциональности и уюте». По прошествии двух лет после
                    окончания
                    ремонта можем сказать, что концепция реализована полностью. Жить в квартире приятно, удобно и не
                    скучно.
                    Следует также сказать, что качество строительных и отделочных работ, осуществлявшихся бригадой,
                    рекомендованной Инной,
                    полностью соответствуют качеству дизайн-проекта.
                </p>
            </div>
        </div>
        <div class="clientContainer">
            <div class="fl">
                <div class="clientPhoto">
                    <div class="coverClient"></div>
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/client3.jpg"/>
                </div>
                <p class="clientName">Щербединская Екатерина, г. Москва</p>
            </div>
            <div class="fr">
                <div class="clientGalery">
                    <ul>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/01.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/02.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/03.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/04.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/05.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client3/06.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="clientDesc">
                <p>
                    133 м², много это или мало, думала я с мужем, купив квартиру свободной планировки, продав свою
                    тесную хрущевку.
                    Просторную гостиную, спальную, детскую, хорошую кухню, гардеробные, санузлы, настоящий мраморный
                    камин хотелось видеть нам в нашей новой квартире.
                    Инна сумела найти компромисс между нашей мечтой о печном камине и реальностью квартирой в
                    многоэтажном доме с отсутствием специального дымохода.
                    Она предложила нам альтернативу - домашний кинотеатр, заключенный в мраморную раму.<br>
                    Моя семья сразу одобрила все решения предложенные Инной.
                    Будем вас рекомендовать своим друзьям.
                </p>
            </div>
        </div>
        <div class="clientContainer">
            <div class="fl">
                <div class="clientPhoto">
                    <div class="coverClient"></div>
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/client4.jpg"/>
                </div>
                <p class="clientName">Милкова Ирина, г. Дубна</p>
            </div>
            <div class="fr">
                <div class="clientGalery">
                    <ul>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/01.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/02.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/03.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/04.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/05.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client4/06.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="clientDesc">
                <p>
                    Я купила небольшую однокомнатную квартиру в Сталинском доме. Хотелось поскорее начать ремонт и не
                    тратить время на поиски дизайнера в интернете.
                    Друзья порекомендовали мне Инну, как ответственного и проверенного профессионала.
                    Посмотрев на сайте ряд её работ, я, не задумываясь, остановила свой выбор на ней. Инна очень
                    серьезно подошла к определению того, что же именно я хотел, учла все мои пожелания.
                    В процессе работы над дизайном квартиры она предлагала несколько вариантов интерьерных решений, и мы
                    вместе выбирали наиболее подходящий.
                    В наше время, рынок материалов настолько перенасыщен, появилось много нового; разобраться в том, что
                    подойдет именно для моего интерьера очень непросто.
                    В этих вопросах помощь Инны была просто незаменимой. Также мне предоставили визуализации по всем
                    комнатам, что позволило полноценно представить будущий результат.
                    В итоге дизайном квартиры я и моя семья остались довольны! Хотим поблагодарить Инну и пожелать ей
                    успехов во всем и побольше хороших клиентов!
                </p>
            </div>
        </div>
		<div class="clientContainer">
            <div class="fl">
                <div class="clientPhoto">
                    <div class="coverClient"></div>
                    <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/client5.jpg"/>
                </div>
                <p class="clientName">Армен Торосян</p>
            </div>
            <div class="fr">
                <div class="clientGalery">
                    <ul>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/01.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/02.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/03.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/04.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/05.jpg"/></li>
                        <li><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client5/06.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="clientDesc">
                <p>
                    Нам с женой понравились работы Инны, представленные в журналах.
					В итоге мы пригласили ее оформить квартиру для нашей многодетной семьи.
					Трудности были в том, что у нас было семь мнений на пять человек, но Инна с терпением и творчески подошла 
					к решению наших многочисленных желаний и теперь мы с удовольствием живем в квартире, спроектированным ею.<br>
					С уважением, Армен.
                </p>
            </div>
        </div>
        <div class="clientForm horizontal clearfix" ng-controller="ContactController">
            <form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
                <fieldset>
                    <div class="fl">
                        <label for="name">Введите Ваше имя:*</label>
                        <input type="text" value="" id="" name="name" class="text" ng-model="leftContactModel.name" ng-required="true" />
                    </div>
                    <div class="fr">
                        <label for="phone">Введите телефон:*</label>
                        <input type="text" value="" id="" name="phone" class="text"  ng-model="leftContactModel.phone" ng-required="true" />
                    </div>
                    <div class="clr">
                        <input type="submit" class="buttonForm" value="Отправить нам заявку"/>
                    </div>
                </fieldset>
            </form>
			<!-- Модальное окно success -->
			<div class="modal-overlay" ng-show="sended" ng-click="clearSended($event)">
				<div class="modal-container">
					<table class="modal-container_i">
						<tbody>
							<tr>
								<td class="modal-container_i2">
									<div class="box-modal clearfix" id="successFormModal">
										<div class="box-modal_close" ng-click="clearSended($event)"></div>
										<!-- Content Container -->
										<section class="contactFormModalContent">
											<!-- Content -->
											<div class="contactFormModalSuccess2">
												<h1 class="modSucc">Спасибо за вашу заявку</h1>
												<h2 class="modSucc">наш дизайнер в ближайшее время</h2>
												<p class="modSucc">свяжется с вами</p>
											</div>
											<!-- /Content -->
										</section>
										<!-- /Content Container -->
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="footer" id="footer">
    <div class="wrap">
        <h1>ЛЮБУЮ КВАРТИРУ МОЖНО СПРОЕКТИРОВАТЬ И ОФОРМИТЬ ТАК ЧТОБЫ ВЫ ЕЙ ГОРДИЛИСЬ, А ВАШИ ГОСТИ ВАМ ЗАВИДОВАЛИ!</h1>
        <a href="#" class="button3 goFormModal">
            <div class="cell">встретиться за кофе</div>
        </a>

        <p class="copy clearfix"><a href="http://azorskaya.ru/" target="_blank" class="fr">http://azorskaya.ru/</a>info@azorskaya.ru
        </p>
		<p class="copy">
			Приобретая продукт, либо оставляя заявку на сайте, Вы соглашаетесь с <a href="#" id="privacyPolicy">условиями политики конфиденциальности</a>.
			<br>Все авторские права защищены. Полное или частичное копирование материалов сайта запрещено!
			<br>ООО «Тэрра-Проект» ОГРН 1065010000912
        </p>
    </div>
</section>

<!-- Модальное окно для публикаций -->
<div style="display: none;">
    <div class="box-modal clearfix" id="publicationModal">
        <div class="box-modal_close arcticmodal-close"></div>
        <div class="publicationNavTop clearfix">
            <div class="fl">Предыдущая</div>
            <div class="fr">Следующая</div>
        </div>
        <!-- Content Container -->
        <section class="publicationContent">
            <!-- Content -->
            <figure>
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/img/client/photo_client2/02.jpg"/>
                <figcaption>Это интерьер, замечательный, круче не бывает. Это есть то место, где будет выводится alt
                    картинки
                </figcaption>
            </figure>
            <h1>Это есть заголовок публикации</h1>

            <p>
                <b>Это общее модальное окно для всех публикаций.
                    В зависимости от кликнутой ссылки выводится соответствующий контент.
                    В этом окне выводятся публикации (Ajax), кликая по ссылкам навигации сверху и снизу.
                    Так-же в это же окно подгружается список заголовков публикаций, если клинули по ссылке "Все
                    публикации".
                    При показе списка заголовков и при клике на одном из них, в это-же окно подгружается нужная
                    публикация.
                    В общем вся (Ajax) подгрузка происходит в этом одном окне, без закрытия.</b>
            </p>

            <p>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum."
            </p>

            <p>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum."
            </p>

            <p>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum."
            </p>

            <p>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum."
            </p>
        </section>
        <!-- /Content Container -->
        <div class="publicationNav clearfix">
            <div class="fl">Предыдущая</div>
            <div class="fr">Следующая</div>
        </div>
    </div>
</div>

<!-- Модальное окно контактов -->
<div style="display: none;">
    <div class="box-modal clearfix" id="contactFormModal" ng-controller="ContactController">
        <div class="box-modal_close arcticmodal-close"></div>
        <!-- Content Container -->
        <section class="contactFormModalContent">
            <!-- Content -->
            <form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)">
                <fieldset>
                    <label for="name">Введите Ваше имя:*</label>
                    <input type="text" value="" id="" name="name" class="text" ng-model="leftContactModel.name" ng-required="true" />
                    <label for="phone">Введите телефон:*</label>
                    <input type="text" value="" id="" name="phone" class="text" ng-model="leftContactModel.phone" ng-required="true" />
                    <label for="text">Удобное время для звонка:</label>
                    <input type="text" value="" id="" name="comfortTime" class="text" ng-model="leftContactModel.comfortTime" />

                    <div>
                        <input type="submit" class="buttonForm" value="Отправить заявку" />
                    </div>
                </fieldset>
            </form>
			<!-- success -->
			<div class="contactFormModalSuccess"  ng-show="sended">
				<h1 class="modSucc">Спасибо за вашу заявку</h1>
				<h2 class="modSucc">наш дизайнер в ближайшее время</h2>
				<p class="modSucc">свяжется с вами</p>
			</div>
			<!-- /Content -->
        </section>
        <!-- /Content Container -->
    </div>
</div>



<!-- Javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.roundabout.js"></script>
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
            w.yaCounter23550703 = new Ya.Metrika({id:23550703,
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
<noscript><div><img src="//mc.yandex.ru/watch/23550703" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
