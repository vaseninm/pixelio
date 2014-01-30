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
		'ajaxUpdate' => 'conversion',
		'afterAjaxUpdate' => 'function (id, data) {
			$(document).trigger("updateSales", $(data).find("#saleJs").text());
		}',
		'columns' => array(
			'ip',
			array(
				'name' => 'status',
				'value' => 'Clients::getSaleLabels()[$data->status]',
				'filter' => Clients::getSaleLabels(),
			),
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

	<hr>
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
					$.fn.yiiGridView.update(' . CJavaScript::encode($model->getGridId()) . ', {
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
				<?php
				$this->widget('vendor.miloschuman.yii-highcharts.highcharts.HighchartsWidget', array(
					'options' => array(
						'title' => array(
							'text' => 'Воронка продаж',
							'x' => -50,
						),
						'chart' => array(
							'type' => 'funnel',
							'marginRight' => 100,
							'events' => array(
								'load'  => new CJavaScriptExpression('
								function(e) {
									var series = this.series[0];
									$(document).bind("updateSales", function(e, data) {
										var sales = $.parseJSON(data);
										series.setData(sales);
									});
								}
								'),
							),
						),
						'plotOptions' => array(
							'series' => array(
								'neckWidth' => '30%',
								'neckHeight' => '50%',
							),
						),
						'legend' => array(
							'enabled' => false,
						),
						'series' => array(
							array(
								'name' => 'Посетителей',
								'data' => new CJavaScriptExpression('$.parseJSON($("#saleJs").text())'),
							),
						),
					),
					'scripts' => array('modules/funnel'),
				));
				?>
			</div>
			<p></p>
			<div id="conversion">
				<p class="lead">Конверсия: <?= $conversion ?>%</p>
			</div>
			<p></p>
		</div>
	</div>
</div>
<div id="saleJs" style="display: none">
	<?= CJSON::encode(array(
		array(Clients::getSaleLabels()[Clients::STATUS_NEW], $sales[Clients::STATUS_NEW]),
		array(Clients::getSaleLabels()[Clients::STATUS_RESPONDED], $sales[Clients::STATUS_RESPONDED]),
		array(Clients::getSaleLabels()[Clients::STATUS_CONTACTED], $sales[Clients::STATUS_CONTACTED]),
		array(Clients::getSaleLabels()[Clients::STATUS_PAID], $sales[Clients::STATUS_PAID]),
	)); ?>
</div>