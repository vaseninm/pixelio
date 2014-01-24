<?php

class MailCommand extends CConsoleCommand {

	public function getHelp() {
		echo "Отправка сообщений по крону" . PHP_EOL;
	}

	public function actionWeekly($args) {
		$noticeList = Notice::model()
				->with('domain')
				->type(Notice::TYPE_EMAIL)
				->findAll();

		$scopes = array(
			'week' => array('period' => array(
					date('Y-m-d H:m:i', strtotime('-1 week')),
					date('Y-m-d H:m:i')
				)),
			'month' => array('period' => array(
					date('Y-m-d H:m:i', strtotime('-1 month')),
					date('Y-m-d H:m:i')
				)),
			'year' => array(array('period' => array(
						date('Y-m-d H:m:i', strtotime('-1 year')),
						date('Y-m-d H:m:i')
					))),
		);

		$domainList = array();

		foreach ($noticeList as $noticeItem) {
			if (!isset($domainList[$noticeItem->domain_id])) {
				$domainList[$noticeItem->domain_id] = array(
					'domain' => null,
					'notice' => array(),
				);
			}
			$domainList[$noticeItem->domain_id]['domain'] = $noticeItem->domain;
			$domainList[$noticeItem->domain_id]['notice'][] = $noticeItem;
		}
		$statistics = array();
		foreach ($domainList as $domain) {
			foreach ($scopes as $type => $scope) {
				$criteria = new CDbCriteria();
				$criteria->with = array('client');
				$criteria->scopes = $scope;
				$criteria->compare('client.domain_id', $domain['domain']->id);
				$criteria->group = 'client_id';
				$visitList = Visits::model()->findAll($criteria);

				$stat = array(
					'count_all' => 0,
					'count_new' => 0,
					'count_old' => 0,
					'messages_all' => 0,
					'messages_unique' => 0,
					'sales' => 0,
				);

				foreach ($visitList as $visit) {
					$stat['count_all'] ++;
					if ($visit->client->status === Clients::STATUS_NEW) {
						$stat['count_new'] ++;
					} else {
						$stat['count_old'] ++;
					}
				}

				$criteria = new CDbCriteria();
				$criteria->with = array('client');
				$criteria->scopes = $scope;
				$criteria->compare('client.domain_id', $domain['domain']->id);
				$stat['messages_all'] = Messages::model()->count($criteria);
				$criteria->group = 'client_id';
				$stat['messages_unique'] = Messages::model()->count($criteria);

				$criteria = new CDbCriteria();
				$criteria->scopes = $scope;
				$criteria->compare('domain_id', $domain['domain']->id);
				$stat['conversion'] = Clients::getConversion($criteria);
				$statistics[$type] = $stat;
			}
		}


		$mail = new YiiMailer('weeklyStatistic', array(
			'statistics' => $statistics,
			'domain' => $domain['domain'],
		));
		$mail->setFrom('no-reply@' . $domain['domain']->domain, 'Уведомитель');
		$mail->setSubject('Ежедневный отчет по ' . CHtml::encode($domain['domain']->domain));
		$mail->setTo(CHtml::listData($domain['notice'], 'id', 'address'));
		if ($mail->send()) {
			echo 'Отправка отчета по домену ' . CHtml::encode($domain['domain']->domain) . ' завершена.' . PHP_EOL;
		} else {
			echo 'Отправка отчета по домену ' . CHtml::encode($domain['domain']->domain) . ' завершилось ошибкой.' . PHP_EOL;
		}
	}

}
