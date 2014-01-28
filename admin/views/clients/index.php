<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs = array(
	'Клиенты' => array('index'),
	'Список',
);
?>

<h1>Список клиентов</h1>

<div id="client-list">
	<?php
	$this->widget('bootstrap.widgets.TbGridView', array(
		'id' => $model->getGridId(),
		'type' => TbHtml::GRID_TYPE_BORDERED,
		'dataProvider' => $model->search(),
		'filter' => $model,
		'ajaxUpdate' => 'sales,conversion',
		'columns' => array(
			'ip',
			'status',
			array(
				'name' => 'theme_id',
				'value' => '$data->theme->name',
				'filter' => Themes::getAll($model->domain_id),
			),
			array(
				'name' => 'domain_id',
				'value' => '$data->domain->domain',
				'filter' => Domains::getActive(),
			),
			array(
				'class' => 'bootstrap.widgets.TbButtonColumn',
				'template' => '{view}',
			),
		),
	));
	?>

<div class="row-fluid">
	<div class="span5">    
		<h2>Воронка продаж:</h2>
		<div id="dateRange">
			<?php
			$this->widget('yiiwheels.widgets.daterangepicker.WhDateRangePicker', array(
				'name' => 'daterangepickertest',
				'htmlOptions' => array(
					'placeholder' => 'Выберите дату'
				),
				'pluginOptions' => array(
					'format' => 'DD.MM.YYYY',
					'startDate' => false,
					'endDate' => false,
					'ranges' => array(
						'Сегодня' => array(new CJavaScriptExpression('moment()'), new CJavaScriptExpression('moment()')),
						'Вчера' => array(new CJavaScriptExpression('moment().subtract("days", 1)'), new CJavaScriptExpression('moment().subtract("days", 1)')),
						'Последние 7 дней' => array(new CJavaScriptExpression('moment().subtract("days", 6)'), new CJavaScriptExpression('moment()')),
						'Последние 30 дней' => array(new CJavaScriptExpression('moment().subtract("days", 29)'), new CJavaScriptExpression('moment()')),
						'Этот месяц' => array(new CJavaScriptExpression('moment().startOf("month")'), new CJavaScriptExpression('moment().endOf("month")')),
						'Предыдущий месяц' => array(new CJavaScriptExpression('moment().subtract("month", 1).startOf("month")'), new CJavaScriptExpression('moment().subtract("month", 1).endOf("month")')),
					),
					'locale' => array(
						'applyLabel' => 'Применить',
						'clearLabel' => 'Отмена',
						'fromLabel' => 'От',
						'toLabel' => 'До',
						'customRangeLabel' => 'Ручной выбор',
						'daysOfWeek' => array('Вск', 'Пнд', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'),
						'monthNames' => array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'),
						'firstDay' => 1
					),
				),
				'callback' => 'function(start, end) { 
					$.fn.yiiGridView.update('.CJavaScript::encode($model->getGridId()).', {
						data: {
							startDate: start.unix(),
							endDate: end.unix()
						}
					});
				}',
			));
			?>
		</div>
		<div id="sales">
			<div>Зашедшие: <?= $sales[Clients::STATUS_NEW] ?></div>
			<div>Оставившие координаты: <?= $sales[Clients::STATUS_RESPONDED] ?></div>
			<div>Вышедшие на связь: <?= $sales[Clients::STATUS_CONTACTED] ?></div>
			<div>Оплатившие: <?= $sales[Clients::STATUS_PAID] ?></div>
		</div>
		<p></p>
		<div id="conversion">
			<p class="lead">Конверсия: <?= $conversion ?>%</p>
		</div>
		<p></p>
	</div>
	<div class="span7">
		<!-- Графическая воронка -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">jQuery.noConflict();</script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/funnel.js"></script>

		<div id="container" style="min-width: 270px; max-width: 600px; height: 270px; margin: 0 auto"></div>
		<script type="text/javascript">

		(function($){ // encapsulate jQuery

		$(function () {
			
			$('#container').highcharts({
				chart: {
					type: 'funnel',
					marginRight: 100
				},
				title: {
					text: 'Графическое представление',
					x: -50
				},
				plotOptions: {
					series: {
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b> ({point.y:,.0f})',
							color: 'black',
							softConnector: true
						},
						neckWidth: '30%',
						neckHeight: '50%'
						
						//-- Вид воронки
						// height: pixels or percent (высота излива)
						// width: pixels or percent (ширина излива)
					}
				},
				legend: {
					enabled: false
				},
				series: [{
					name: 'Посетителей',
					data: [
						['Зашедшие', 1900],
						['Оставившие координаты', 1000],
						['Вышедшие на связь', 500],
						['Оплатившие',    200],
					   // ['Бла-бла-бла',    0]
					]
				}]
			});
		});
		})(jQuery);
		</script>
		<script>
		// color theme
		Highcharts.theme = {
			colors: ['#058DC7', '#50B432', '#DDDF00', '#ED561B', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
			//colors: ['#DDDF0D', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee', '#55BF3B', '#aaeeee'],
			//colors: ['#24CBE5', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
			//colors: ['#2f7ed8', '#0d233a', '#8bbc21', '#910000', '#1aadce', '#492970', '#f28f43', '#77a1e5', '#c42525', '#a6c96a'],
		   };
		   // Apply the theme
		var highchartsOptions = Highcharts.setOptions(Highcharts.theme);
		</script>
	</div>
</div>	
</div>