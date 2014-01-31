<?php

class ClientsController extends PxAdminController
{

	public $count;

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
			'ajaxOnly + changeStatus'
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'roles' => array(Users::ROLE_USER),
			),
			array('deny',
				'users' => array('*'),
			),
		);
	}

	protected function beforeAction($action)
	{
		$return = parent::beforeAction($action);
		$this->menu = array(
			array('label' => 'Клиенты', 'url' => array('index')),
		);
		return $return;
	}

	public function actionIndex()
	{
		$startDate = date('Y-m-d H:i:s', Yii::app()->request->getParam('startDate', 0));
		$endDate = gmdate('Y-m-d H:i:s', Yii::app()->request->getParam('endDate', time()));
					
		$model = new Clients('search');
		$model->unsetAttributes(); // clear any default values
		$model
			->period($startDate, $endDate)
			->user(Yii::app()->user->id);
		if (isset($_GET['Clients'])) {
			$model->attributes = $_GET['Clients'];
		}
		$criteria = new CDbCriteria();
		$criteria->compare('theme_id', $model->theme_id);
		$criteria->compare('domain_id', $model->domain_id);
		$criteria->scopes[] = array(
			'period' => array($startDate, $endDate),
		);
		$criteria->scopes[] = array(
			'user' => array(Yii::app()->user->id),
		);
		$this->render('index', array(
			'model' => $model,
			'sales' => Clients::getSales($criteria),
			'conversion' => Clients::getConversion($criteria),
		));
	}

	public function actionView($id) {

		$client = $this->loadModel('Clients', $id);
		$visitsCriteria = new CDbCriteria();
		$visitsCriteria->compare('client_id', $client->id);
		$visitsProvider = new CActiveDataProvider('Visits', array('criteria' => $visitsCriteria));
		$messagesCriteria = new CDbCriteria();
		$messagesCriteria->compare('client_id', $client->id);
		$messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $messagesCriteria));
		$this->render('view', array(
			'client' => $client,
			'visitsProvider' => $visitsProvider,
			'messagesProvider' => $messagesProvider,
		));
	}

	public function actionMessage($id) {
		$model = $this->loadModel('Messages', $id);
		$this->render('message', array(
			'model' => $model,
		));
	}

	public function actionChangeStatus() {
		$model = $this->loadModel('Clients', Yii::app()->request->getPost('id'));
		$oldStatus = $model->status;
		$model->status = Yii::app()->request->getPost('status');
		$result = $model->save();
		echo CJSON::encode(array(
			'result' => $result,
			'status' => $result ? $model->status : $oldStatus,
		));
	}

}