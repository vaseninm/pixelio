<?php

class MailCommand extends CConsoleCommand {

	public function getHelp() {
		echo "Отправка сообщений по крону" . PHP_EOL;
	}

	public function actionDaily($args) {
		$noticeList = Notice::model()
				->with('domain')
				->type(Notice::TYPE_EMAIL)
				->findAll();

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
				
		foreach ($domainList as $domain) {
			$criteria = new CDbCriteria();
			$criteria->with = array('client');
			$criteria->addCondition('DATE(`time`) = CURRENT_DATE()');
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
				$stat['count_all']++;
				if ($visit->client->status === Clients::STATUS_NEW) {
					$stat['count_new']++;
				} else {
					$stat['count_old']++;
				}
			}
			
			$criteria = new CDbCriteria();
			$criteria->with = array('client');
			$criteria->addCondition('DATE(`time`) = CURRENT_DATE()');
			$criteria->compare('client.domain_id', $domain['domain']->id);
			$stat['messages_all'] = Messages::model()->count($criteria);
			$criteria->group = 'client_id';
			$stat['messages_unique'] = Messages::model()->count($criteria);
			
			$criteria = new CDbCriteria();
			$criteria->addCondition('DATE(`update_time`) = CURRENT_DATE()');
			$criteria->compare('domain_id', $domain['domain']->id);
			$stat['conversion'] = Clients::getConversion($criteria);
									
			$mail = new YiiMailer('dailyStat', array(
				'stat' => $stat,
				'domain' => $domain['domain'],
			));
			$mail->setFrom('no-reply@pixelio.ru', 'Уведомитель');
			$mail->setSubject('Ежедневный отчет по ' . CHtml::encode($domain['domain']->domain));
			$mail->setTo(CHtml::listData($domain['notice'], 'id', 'address'));
			if ($mail->send()) {
				echo 'Отправка отчета по домену ' . CHtml::encode($domain['domain']->domain) . ' завершена.';
			} else {
				echo 'Отправка отчета по домену ' . CHtml::encode($domain['domain']->domain) . ' завершилось ошибкой.';
			}
		}
	}

}
