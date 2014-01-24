<?php
/* @var $this PxAngularController */
?>
<!doctype html>
<html ng-app='pixelio'>
<head ng-controller="SiteController">
    <meta charset="utf-8">
    <title>Дизайн-проект однокомнатных квартир</title>
    <meta name="keywords" content="квартира" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/style.css">

    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/jquery.bxslider.css">

    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/cycle2.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.bxslider.js"></script>
    <!--FANCYBOX-->
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/jquery.fancybox-buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->theme->baseUrl ?>/files/css/jquery.fancybox-thumbs.css" />



    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/jquery.fancybox-media.js"></script>



    <!--/END_FANCY-->





    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl ?>/files/js/js.js"></script>


    <script>
        var themePath = "<?= Yii::app()->theme->baseUrl ?>";
    </script>

    <!--Angular-->
    <script src="angular/libs/angular.js"></script>
    <script src="angular/controllers/SiteControllers.js"></script>
    <script src="angular/modules/Config.js"></script>

</head>

<body>

<div class="page">

<!-- start-header -->


<div class="header">
    <div class="main_resize">
        <div class="logo left">
            <a href="#"><img src="<?= Yii::app()->theme->baseUrl ?>/files/images/logo.png" alt=""></a>
        </div>

        <div class="numbers right">

            <span>8(905) </span>539-57-58<br>
            <a href="mailto:info@azorskaya.ru?Subject=Поддержка" target="_top">info@azorskaya.ru</a>
        </div>
        <div class="clr"></div>
    </div>
</div>


<!-- end-header -->

<div class="content">

<div class="typical_title_segment" ng-controller="ContactController">
    <div class="main_resize">
        <div class="left">
            <div class="diz_title">
                <span class="big_semifat">ДИЗАЙН-ПРОЕКТ</span><br>
                <span class="bigger_fat">ОДНОКОМНАТНЫХ КВАРТИР</span>
            </div>
            <div class="place_block">
                <span class="large_semifat">В МОСКВЕ И МОСКОВКОЙ ОБЛАСТИ</span><br>
                <span class="small_semifat">стоимость проектирования однокомнатной</span><br>
                <span class="medium_semifat">квартиры любой площади</span><br>
            </div>
            <div class="price">100 тыс. руб.</div>

        </div>
        <div class="right">

            <h4>
                оставьте заявку на <span>бесплатную</span> консультацию </h4>

            <div class="form">
                <form id="just_form" action="#" method="post" name="ContactForm" novalidate ng-submit="leftContact($event)">
                    <input type="text" placeholder="Имя" name="name" id="name" ng-model="leftContactModel.name" ng-required="true">
                    <input type="text" placeholder="Телефон" name="phone" id="phone" ng-model="leftContactModel.phone" ng-required="true">
                    <input type="text" placeholder="Удобное время для звонка" name="comfortTime" id="time" ng-model="leftContactModel.comfortTime" ng-required="true">
                    <input type="submit" value="Оставить заявку" ng-disabled="ContactForm.$invalid">
                </form>
            </div>

        </div>
        <div class="clr"></div>
    </div>
</div>

<div class="adventage_segment">
    <div class="main_resize">
        <div class="title">Наши<span> преимущества</span></div>
        <div class="volume">3Д визуализация по всем комнатам включая санузлы</div>
        <div class="small_resize">
            <ul class="left">
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_1.png) no-repeat left 16px;">Поездки вместе с дизайнером для выбора и покупки мебели и материалов</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_2.png) no-repeat left 16px;">Конечная цена <br>без наценок <br>и удорожания</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_3.png) no-repeat left 16px;">Качественная (соответствующая Законодательству) документация</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_4.png) no-repeat left 16px;">Более 50 реализованных проектов</li>
            </ul>
            <ul class="right">
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_5.png) no-repeat left 16px;">Сроки исполнения проекта<br> 30 рабочих дней!</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_6.png) no-repeat left 16px;">Просчет стоимости <br>материалов <br>в процессе <br>проектирования</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_7.png) no-repeat left 16px;">6 лет опыта <br>работы</li>
                <li style="background: url(<?= Yii::app()->theme->baseUrl ?>/files/images/adventage_li_bg_8.png) no-repeat left 16px;">Публикации в <br>известных <br>журналах</li>

            </ul>

        </div>
        <div class="clr"></div>
    </div>
</div>


<div class="slider_segment">
    <div class="main_resize">
        <div class="title">Пресса о нас</div>
        <div class="slider_journal">

            <div class="slider2">

                <div class="journal journal_1">
                    <h3>Август 2013</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/august2013/6.jpg" width="300" height="437" />
                        </div>


                    </div>

                </div>


                <div class="journal journal_2">
                    <h3>Март 2013</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/6.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/7.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/8.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/9.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/answer_mart2013/10.jpg" width="300" height="437" />
                        </div>


                    </div>

                </div>

                <div class="journal journal_3">
                    <h3>Февраль 2013</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/domoi_fevral_2013/6.jpg" width="300" height="437" />
                        </div>


                    </div>

                </div>



                <div class="journal journal_4">
                    <h3>Август 2012</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/6.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/7.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/beaty_august2012/8.jpg" width="300" height="437" />
                        </div>

                    </div>

                </div>


                <div class="journal journal_5">
                    <h3>Ноябрь 2009</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/6.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/7.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2009/8.jpg" width="300" height="437" />
                        </div>

                    </div>

                </div>


                <div class="journal journal_6">
                    <h3>Ноябрь 2008</h3>
                    <div class="slider3">
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/1.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/2.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/3.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/4.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/5.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/6.jpg" width="300" height="437" />
                        </div>
                        <div class="pics">
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/7.jpg" width="300" height="437" />
                            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/idea_nojabr2008/8.jpg" width="300" height="437" />
                        </div>

                    </div>

                </div>










            </div>
            <div class="cycle_navigation">
                <div id="prev">prev</div>
                <div id="next">next</div>
            </div>
            <div class="cycle_navigation_2">
                <div id="prev_1">prev</div>
                <div id="next_1">next</div>
            </div>

        </div>

    </div>
    <div class="clr"></div>
</div>

</div>


<div class="toggle_segment">
    <div class="main_resize">
        <div class="left">
            <a class="details"  style="text-decoration: none;">
                <input type="submit" value="ПОДРОБНО О ДИЗАЙН-ПРОЕКТЕ">
            </a>

            <div class="covert_1">
                <p>
                    В состав проекта входит <span>вся рабочая документация</span> для стройки чтобы у ваших
                    строителей <span>не возникло вопросов</span> при
                    производстве работ:
                </p>

                <ul>
                    <li>план перепланировки</li>
                    <li>план монтажа перегородок</li>
                    <li>спецификация дверей</li>
                    <li>план потолков</li>
                    <li>план светильников и выключателей</li>
                    <li>план розеток</li>
                    <li>план напольных покрытий</li>
                    <li>развертки по стенам</li>
                    <li>раскладка плитки и привязка сантехники в санузлах</li>
                </ul>
                <p>
                    <span>3д визуализации</span> по всем помещениям
                    <span>вашего интерьера</span> с конкретными материалами и мебелью
                </p>
                <a href="#anch_1" class="anchor_link">Примеры</a>
                <p>
                    <span>Просчет стоимости материалов</span> в процессе
                    проектирования для оптимального
                    расходования <span>средств на стройку</span>
                </p>
                <a title="план монтажа перегородок" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/montaz_peregorodok.jpg" rel="gallery_1" class="fancybox">Примеры</a>
                <a title="план обмеров" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_obmerow.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план подбора мебели" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_podbora_mebeli.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план подбора светильников" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_podbora_svetilnikow.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план полов" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_polow.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план потолков" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_potolkow.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план розеток" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_rozetok.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план с мебелью" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_s_mebeliu.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="план светильников" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plan_svet.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="привязка плитки в ванной комнате" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/plitka_vannaya.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="развертки по стенам помещения" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/razvert_po_stenam.jpg" rel="gallery_1" class="fancybox"></a>
                <a title="привязка сантехники в ванной комнате" style="display:none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/drafts/santech_vannaya.jpg" rel="gallery_1" class="fancybox"></a>
            </div>
        </div>
        <div class="right" ng-controller="ContactController">
            <a class="buy"  style="text-decoration: none;">
                <input type="submit" value="ЗАКАЗАТЬ">
            </a>

            <div class="covert_2">
                <div class="form_univers form">
                    <h4>оставьте заявку на <span>бесплатную</span> консультацию </h4>
                    <form id="just_form" action="#" method="post" name="ContactForm" novalidate ng-submit="leftContact($event)">
                        <input type="text" placeholder="Имя" name="name" id="name" ng-model="leftContactModel.name" ng-required="true">
                        <input type="text" placeholder="Телефон" name="phone" id="phone" ng-model="leftContactModel.phone" ng-required="true">
                        <input type="text" placeholder="Удобное время для звонка" name="comfortTime" id="time" ng-model="leftContactModel.comfortTime" ng-required="true">
                        <input type="submit" value="Оставить заявку" ng-disabled="ContactForm.$invalid">
                    </form>
                </div>
            </div>

        </div>
        <div class="clr"></div>
    </div>
</div>

<div class="work_segment">
    <div class="main_resize">
        <div class="title"><span>Как мы работаем</span></div>
        <div class="free">free</div>

        <ul class="first_part">
            <li class="first">1. Оставить<br>заявку</li>
            <li class="second">2. Выслать по e-mail план<br>и обсудить с дизайнером<br>техзадание</li>
            <li class="third">3. Получить 3 варианта<br>планировки</li>

        </ul>

        <ul class="second_part">
            <li class="fourth">4. Встреча на <br>обьекте,<br>замер, подписание<br>договора</li>
            <li class="fifth">5. Разработка<br>дизайн-проекта</li>
            <li class="sixth">6. Утверждение<br>визуализаций</li>
            <li class="seventh">7. Просчет и<br>оптимизация<br>отделочных материалов</li>
        </ul>
        <div class="clr"></div>
        <div class="small_tite">Дизайн-проект однокомнатной квартиры ЛЮБОЙ<br> площади 100 тыс. рублей</div>
        <div class="clr"></div>
    </div>
</div>


<!-- start-jast-form-segment -->
<div class="jast_form_segment" ng-controller="ContactController">
    <div class="main_resize">
        <div class="right">
            <div class="form_univers form">
                <h4>оставьте заявку на <span>бесплатную</span> консультацию</h4>
                <form id="just_form" action="#" method="post" name="ContactForm" novalidate ng-submit="leftContact($event)">
                    <input type="text" placeholder="Имя" name="name" id="name" ng-model="leftContactModel.name" ng-required="true">
                    <input type="text" placeholder="Телефон" name="phone" id="phone" ng-model="leftContactModel.phone" ng-required="true">
                    <input type="text" placeholder="Удобное время для звонка" name="comfortTime" id="time" ng-model="leftContactModel.comfortTime" ng-required="true">
                    <input type="submit" value="Оставить заявку" ng-disabled="ContactForm.$invalid">
                </form>
            </div>
        </div>
        <div class="clr"></div>
    </div>

</div>
<!-- end-jast-form-segment -->

<!-- start-comment-segment -->

<div class="comment_segment">
<div class="main_resize">
<div class="title" id="anch_1">Наши Заказчики о Нас</div>
<div class="slider">
    <div class="slider1">

        <div class="slide">
            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/real_man_1.jpg" alt="" class="real_man" width="337" height="337">
            <a href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0001.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0001.jpg" class width="385" height="385" alt="" />

            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0000.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0000.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0002.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0002.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0003.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/Bedroom_cam_0003.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0000.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0000.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0001.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0001.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0002.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0002.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0003.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0003.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0004.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0004.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0005.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0005.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0006.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0006.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0006.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0006.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0007.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0007.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0008.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0008.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0009.jpg" class="fancybox" data-fancybox-group="gallery_comment_1" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_1/LIvingroomKitchen_cam_0009.jpg" class width="385" height="385" alt="" />
            </a>


            <div class="slider_comment">
                <h5>Милкова Ирина</h5>
                Я купила небольшую однокомнатную квартиру в Сталинском доме. Хотелось поскорее начать ремонт и не тратить время на поиски дизайнера в интернете. Друзья порекомендовали мне Инну, как ответственного и проверенного профессионала. <br><a href="#milkova" class="fancybox">...</a><p style="display:none; width:450px;" id="milkova">Я купила небольшую однокомнатную квартиру в Сталинском доме. Хотелось поскорее начать ремонт и не тратить время на поиски дизайнера в интернете. Друзья порекомендовали мне Инну, как ответственного и проверенного профессионала. Посмотрев на сайте ряд её работ, я, не задумываясь, остановила свой выбор на ней. Инна очень серьезно подошла к определению того, что же именно я хотела, учла все мои пожелания. В процессе работы над дизайном квартиры она предлагала несколько вариантов интерьерных решений, и мы вместе выбирали наиболее подходящий. В наше время, рынок материалов настолько перенасыщен, появилось много нового; разобраться в том, что подойдет именно для моего интерьера очень непросто. В этих вопросах помощь Инны была просто незаменимой. Также мне предоставили визуализации по всем комнатам, что позволило полноценно представить будущий результат.
                    В итоге дизайном квартиры я и моя семья остались довольны! Хотим поблагодарить Инну и пожелать ей успехов во всем и побольше хороших клиентов!


                </p>
            </div>
        </div>


        <div class="slide">
            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/real_man_2.jpg" alt="" class="real_man" width="337" height="337">
            <a href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/bedroom_cam_0000.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/bedroom_cam_0000.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/bedroom_cam_0001.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/bedroom_cam_0001.jpg" class width="385" height="385" alt="" />
            </a>

            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0000.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0000.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0001.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0001.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0002.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0002.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0003.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0003.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0004.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0004.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0005.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0005.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0006.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0006.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0007.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0007.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0008.jpg" class="fancybox" data-fancybox-group="gallery_comment_2" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_2/flat_cam_0008.jpg" class width="385" height="385" alt="" />
            </a>

            <div class="slider_comment">
                <h5>Евгений Петров</h5>
                Когда у тебя 100 кв.м. тебя не очень заботит что, где и  как разместить. А когда 45 кв.м.? Как впихнуть гостиную, спальную, кухню, туалет, гардеробные в  эти метры. Надо обладать особым даром и  чутьем.<br><a href="#milkova" class="fancybox">...</a><p style="display:none; width:450px;" id="milkova"> Когда у тебя 100 кв.м. тебя не очень заботит что, где и  как разместить. А когда 45 кв.м.? Как впихнуть гостиную, спальную, кухню, туалет, гардеробные в  эти метры. Надо обладать особым даром и  чутьем. Во всем этом мне помогла разобраться Инна. Она  предложила мне  такую планировку моей однушки, которая перевернула мое представление о комфорте и  учла все мои пожелания.   Я люблю осень - как время года поэтому мой интерьер получился очень теплый и запоминающийся.
                    Всегда считал, что любую работу должен выполнять профессионал.  </p>


            </div>
        </div>

        <div class="slide">
            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/real_man_3.jpg" alt="" class="real_man" width="337" height="337">
            <a href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_11.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_11.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_21.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_21.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_31.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_31.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_41.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Bedroom_Final_41.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_1Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_1Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_2Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_2Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_3Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_3Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_4Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_4Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_5Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_3" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_3/Living&Kitchen_Camera_5Post.jpg" class width="385" height="385" alt="" />
            </a>
            <div class="slider_comment">
                <h5>Екатерина Ряжева</h5>
                На севере Москвы.
                Мы обратились за помощью к Инне, и между нами сразу возникло взаимопонимание. Работая над проектом, она внимательно выслушивала все пожелания и очень корректно вносила свои профессиональные предложения. После этой встречи желание искать кого-то еще, больше не возникало!
                <br><a href="#milkova" class="fancybox">...</a><p style="display:none; width:450px;" id="milkova">На севере Москвы.
                    Мы обратились за помощью к Инне, и между нами сразу возникло взаимопонимание. Работая над проектом, она внимательно выслушивала все пожелания и очень корректно вносила свои профессиональные предложения. После этой встречи желание искать кого-то еще, больше не возникало!
                    В течение всей работы, ощущалась её заинтересованность сделать наше жилище максимально современным, красивым и комфортным. Инна контролировала качество работ и держала нас в курсе всех дел, которые происходили на объекте. Хотим заметить, что Инна много времени уделила подбору материалов. Да и в процессе реализации проекта всегда была готова помочь и проконсультировать.
                    Мы очень довольны результатом! Учтены все наши пожелания и просьбы. Всё сделано "под нас"!  Хотим выразить свою искреннюю благодарность и пожелать Инне дальнейших успехов в творческой работе.
                </p>

            </div>
        </div>

        <div class="slide">
            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/real_man_4.jpg" alt="" class="real_man" width="337" height="337">
            <a href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_0_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_0_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_1_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_1_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_1_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_1_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_2_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_2_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_3_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_3_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_4_Post.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/Flat_Cam_4_Post.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_1_p.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_1_p.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_2_p.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_2_p.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_3_p.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_3_p.jpg" class width="385" height="385" alt="" />
            </a>
            <a style="display: none;" href="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_4_p.jpg" class="fancybox" data-fancybox-group="gallery_comment_4" title="">
                <img class="real_proekt" src="<?= Yii::app()->theme->baseUrl ?>/files/images/comm_4/preview_cam_4_p.jpg" class width="385" height="385" alt="" />
            </a>
            <div class="slider_comment">
                <h5>Анастасия Алфимова</h5>
                Хочу высказать Вам огромную признательность за выпавшую мне возможность сотрудничать с Вами! Инна не из того числа людей, которые навязывают только свои личные вкусы. С момента начала работы, она  <br><a href="#milkova" class="fancybox">...</a><p style="display:none; width:450px;" id="milkova">Хочу высказать Вам огромную признательность за выпавшую мне возможность сотрудничать с Вами! Инна не из того числа людей, которые навязывают только свои личные вкусы. С момента начала работы, она внимательно расспросила меня о предпочтениях в стиле, цветах, материалах, так же предложила мне подобрать ряд видов интерьеров, приятных для меня, что бы более конкретно составить представление о моем запросе. Совместные походы по магазинам при выборе отделочных материалов, оказывается, приносят не малое удовольствие! Особенно когда рядом находится профессионал, который может дать дельный совет. Удобное расположение мебели и их цветовое решение, позволили сделать из небольшой квартиры площадью 50 мкв., полноценную двухкомнатную квартиру!
                    В результате получился настоящий шедевр — интерьер, сочетающий в себе изящество, комфорт, а главное мою индивидуальность. Я убедилась на своем опыте, что когда рядом настоящий профессионал, можно воплотить в жизнь любую фантазию!
                </p>

            </div>
        </div>




    </div>

</div>
</div>

</div>


<!-- end-comment-segment -->





<!-- start-footer -->

<div class="footer">
    <div class="main_resize">
        <div class="title"><span>НЕ БЫВАЕТ МАЛЕНЬКИХ КВАРТИР</span>- БЫВАЮТ<br> НЕГРАМОТНЫЕ ПЛАНИРОВКИ</div>
        <div class="botttom_center">
            <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/sofa_img.png" alt="">
        </div>
        <!--div class="big_bottom">
                <img src="<?= Yii::app()->theme->baseUrl ?>/files/images/inter_img_2.png" alt="">
                <div class="sofa_mask"></div>
        </div-->

        <div class="copi">


            <div class="numbers right">

                <span>8(905) </span>539-57-58<br>
                <a href="mailto:info@azorskaya.ru?Subject=Поддержка" target="_top">info@azorskaya.ru</a>
            </div>



            <div class="home_link">
                <a href="index.html">www.azorskaya.ru</a>
            </div>

        </div>
    </div>

</div>

<!-- end - footer -->







</div>


</body>
</html>