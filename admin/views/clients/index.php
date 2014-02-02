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
		'ajaxUpdate' => 'conversion,sales',
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
			
			<div id="sales" class="funelContainer">
				<div class="funel1"><div style="height:70px;">
					<?= Clients::getSaleLabels()[Clients::STATUS_NEW] ?>
					<br><b><?= $sales[Clients::STATUS_NEW] ?></b>
				</div></div>
				<div class="funel2"><div style="height:70px;">
						<?= Clients::getSaleLabels()[Clients::STATUS_RESPONDED] ?>
						<br><b><?= $sales[Clients::STATUS_RESPONDED] ?></b>
				</div></div>
				<div class="funel3"><div style="height:70px;">
						<?= Clients::getSaleLabels()[Clients::STATUS_CONTACTED] ?>
						<br><b><?= $sales[Clients::STATUS_CONTACTED] ?></b>
				</div></div>
				<div class="funel4"><div style="height:70px;">
						<?= Clients::getSaleLabels()[Clients::STATUS_PAID] ?>
						<br><b><?= $sales[Clients::STATUS_PAID] ?></b>
				</div></div>
				<div class="funelBg"></div>
			</div>
			
			<p></p>
			<div id="conversion">
				<p class="lead">Конверсия: <?= $conversion ?>%</p>
			</div>
			<p></p>
</div>