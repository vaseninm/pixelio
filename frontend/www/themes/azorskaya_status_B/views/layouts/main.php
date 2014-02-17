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
            <td class="aboutTable" id="jsMenu"><a href="#zakaz">Заказать</a></td>
            <td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t1.jpg"/></td>
            <td class="jobTable" id="jsMenu"><a href="#job">Примеры работ</a></td>
            <!--<td class="clientTable" id="jsMenu"><a href="#client">Наши клиенты</a></td>--><td class="imgTable"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/t5.jpg"/></td>
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

<section class="triangle2 job" id="job">
	<div class="wrap clearfix">
		<div class="descriptor"><span>Студия дизайна интерьеров Инны Азорской</span><br>Готовый проект точно в срок за 3 недели от <?= Vars::get('threeWeekWorks') ?> р.м<sup>2</sup></div>
		<h1>Наши работы</h1>
		<?php $this->renderPartial('//layouts/_galery_1'); ?>
		<?php $this->renderPartial('//layouts/_galery_2'); ?>
		<?php $this->renderPartial('//layouts/_galery_3'); ?>
		<div class="clr"></div>
		<?php $this->renderPartial('//layouts/_galery_4'); ?>
		<?php $this->renderPartial('//layouts/_galery_5'); ?>
		<?php $this->renderPartial('//layouts/_galery_6'); ?>
		<div class="clr"></div>
		<?php $this->renderPartial('//layouts/_galery_7'); ?>
		<?php $this->renderPartial('//layouts/_galery_8'); ?>
		<?php $this->renderPartial('//layouts/_galery_9'); ?>
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

<section class="price">
	<div class="wrap" id="service">
	<h1>Три основных пакета</h1>

	<h2>дизайн-проекта</h2>

	<div class="clearfix">
		<div class="flp">
			<div class="price1 cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/bazoviy.jpg"/>

				<h3>Базовый</h3>

				<p>(от <?= Vars::get('priceBase') ?> руб. м<sup>2</sup>)</p>

			</div>
		</div>
		<div class="flp">
			<div class="price2 zoom cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/optimal.jpg"/>

				<h3>Оптимальный</h3>

				<p>(от <?= Vars::get('priceOptimum') ?> руб. м<sup>2</sup>)</p>
			</div>
		</div>
		<div class="flp">
			<div class="price3 cell">
				<img src="<?= Yii::app()->theme->baseUrl ?>/files/img/lux.jpg"/>

				<h3>Люкс</h3>

				<p>(от <?= Vars::get('priceLux') ?> руб. м<sup>2</sup>)</p>
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
						<td>Обмерный чертёж с привязкой инженерных коммуникаций</td>
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
						<td>План возводимых перегородок с маркировкой дверных проёмов.</td>
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
				<a href="#" class="btn-slide" id="btn-slide" onclick="yaCounter23550703.reachGoal('VIEW_TARIF_B'); return true;">смотреть все услуги</a>
			</div>
			<div class="arrow3 fr trianglM" id="arrow3" onclick="yaCounter23550703.reachGoal('VIEW_TARIF_B'); return true;">
				<div></div>
			</div>
			<div class="arrow2 fr color trianglB" id="arrow2" onclick="yaCounter23550703.reachGoal('VIEW_TARIF_B'); return true;">
				<div></div>
			</div>
			<div class="arrow1 fr trianglM" id="arrow1" onclick="yaCounter23550703.reachGoal('VIEW_TARIF_B'); return true;">
				<div></div>
			</div>
		</div>
	</div>
	<div class="priceForm horizontal clearfix" ng-controller="ContactController">
		<form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23550703.reachGoal('TARIF_FORM_B'); return true;">
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

<section class="jornal" id="about">
    <div class="shadow"></div>
    <div class="wrap relative jornalSection clearfix">
        <div class="desc fl">Интерьер от известного дизайнера Инны Азорской …</div>
        <div class="desc2 fr">
            <p>Наша студия выполнит весь комплекс проектных и строительных работ по Вашей квартире, начиная от дизайна
                проекта и заканчивая Вашим переездом в новую квартиру.</p>
        </div>

        <div class="publications"></div>

        <div class="allPublication"><a href="#" id="allPublication" onclick="yaCounter23550703.reachGoal('VIEW_ALL_PUBLICATION_B'); return true;"></a></div>

        <div class="publcTitle1"><a href="#" id="2013_08" onclick="yaCounter23550703.reachGoal('VIEW_08_2013_PUBLICATION_B'); return true;">Август 2013</a></div>
        <div class="publication1"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2013.jpg"/>
        </div>

        <div class="publcTitle2"><a href="#" id="2013_03" onclick="yaCounter23550703.reachGoal('VIEW_03_2013_PUBLICATION_B'); return true;">Март 2013</a></div>
        <div class="publication2"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa03_2013.jpg"/>
        </div>

        <div class="publcTitle3"><a href="#" id="2013_02" onclick="yaCounter23550703.reachGoal('VIEW_02_2013_PUBLICATION_B'); return true;">Февраль 2013</a></div>
        <div class="publication3"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa02_2013.jpg"/>
        </div>

        <div class="publcTitle4"><a href="#" id="2012_08" onclick="yaCounter23550703.reachGoal('VIEW_08_2012_PUBLICATION_B'); return true;">Август 2012</a></div>
        <div class="publication4"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa08_2012.jpg"/>
        </div>

        <div class="publcTitle5"><a href="#" id="2009_11" onclick="yaCounter23550703.reachGoal('VIEW_11_2009_PUBLICATION_B'); return true;">Ноябрь 2009</a></div>
        <div class="publication5"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2009.jpg"/>
        </div>

        <div class="publcTitle6"><a href="#" id="2008_11" onclick="yaCounter23550703.reachGoal('VIEW_11_2008_PUBLICATION_B'); return true;">Ноябрь 2008</a></div>
        <div class="publication6"><img src="<?= Yii::app()->theme->baseUrl ?>/files/img/pressa/pressa11_2008.jpg"/>
        </div>

    </div>
</section>

<section class="triangle1"></section>

<section class="best">
    <div class="wrap">
        <h1>Звоните и заказывайте</h1>

        <!--<div class="clearfix bestContainer">
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
        </div>-->
        <!--<a href="#" class="button1 goFormModal">
            <div class="cell">заказать обратный звонок</div>
        </a>-->
    </div>
</section>

<section class="footer" id="footer">
    <div class="wrap">
        <h1>ЛЮБУЮ КВАРТИРУ МОЖНО СПРОЕКТИРОВАТЬ И ОФОРМИТЬ ТАК ЧТОБЫ ВЫ ЕЙ ГОРДИЛИСЬ, А ВАШИ ГОСТИ ВАМ ЗАВИДОВАЛИ!</h1>
		<p class="copy clearfix" style="text-align:center">
			<a onclick="yaCounter23550703.reachGoal('GO_MAIN_SITE_B'); return true;" class="fr" target="_blank" href="http://azorskaya.ru/">http://azorskaya.ru/</a>
			<span class="fl">info@azorskaya.ru</span>
			<span style="color:#DCA208;font-size:44px;line-height:10px">тел. +7 (905) 539 57 58</span>
        </p>
		<p class="copy">
			Приобретая продукт, либо оставляя заявку на сайте, Вы соглашаетесь с <a href="#" id="privacyPolicy" onclick="yaCounter23550703.reachGoal('VIEW_PRIVATE_B'); return true;">условиями политики конфиденциальности</a>.
			<br>Все авторские права защищены. Полное или частичное копирование материалов сайта запрещено!
			<br>ООО «Тэрра-Проект» ОГРН 1065010000912
        </p>
    </div>
</section>

<!-- Модальное окно контактов -->
<div style="display: none;">
    <div class="box-modal clearfix" id="contactFormModal" ng-controller="ContactController">
        <div class="box-modal_close arcticmodal-close"></div>
        <!-- Content Container -->
        <section class="contactFormModalContent">
            <!-- Content -->
			<p style="color:#f1f1f1;font-size:42px;text-align:center;padding:0;text-indent:0px">позвоните нам +7 (905) 539 57 58<br><span style="font-size:32px;">или</span></p>
            <form method="post" action="" id="contact-form" name="ContactForm" novalidate ng-submit="leftContact($event)" onsubmit="yaCounter23550703.reachGoal('POPAP_FORM_B'); return true;">
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
