<?php

class PhrasesController extends PxAdminController
{

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
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
			array('label' => 'Фразы', 'url' => array('index')),
			array('label' => 'Добавить фразу', 'url' => array('create')),
		);
		return $return;
	}

	public function actionIndex()
	{
		$model = new Phrases('search');
		$model->unsetAttributes(); // clear any default values
		$model->user(Yii::app()->user->id);
		if (isset($_GET['Phrases']))
			$model->attributes = $_GET['Phrases'];

		$this->render('index', array(
			'model' => $model,
		));
	}

	public function actionCreate()
	{
		$model = new Phrases;

		$this->performAjaxValidation($model);

		if (isset($_POST['Phrases'])) {
			$model->attributes = $_POST['Phrases'];
			switch ($model->type) {
				case Phrases::TYPE_IMAGE:
					$model->file=CUploadedFile::getInstance($model,'file');
					$name = '/api/uploads/vars/'.substr(md5(rand()), 5, 10).'.'.$model->file->getExtensionName();
					$model->value = $name;
					if ($model->validate()) {
						$model->file->saveAs(Yii::getPathOfAlias('root') . $name);
					}
					break;
				case Phrases::TYPE_TEXT:
					$model->value = CHtml::encode($model->value);
					break;
				case Phrases::TYPE_HTML:
					break;
			}
			if ($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create', array(
			'model' => $model,
		));
	}


	public function actionUpdate($id)
	{
		$phrase = $this->loadModel('Phrases', $id);
		$dynamic = new DynamicPhrases();

		$this->performAjaxValidation($phrase);

		if (isset($_POST['Phrases'])) {
			$phrase->attributes = $_POST['Phrases'];
			if ($phrase->save())
				$this->redirect(array('index'));
		}

		$this->render('update', array(
			'phrase' => $phrase,
			'dynamic' => $dynamic,
		));
	}

	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			$model = $this->loadModel('Phrases', $id);
			switch ($model->type) {
				case Phrases::TYPE_IMAGE:
					@unlink(Yii::getPathOfAlias('root') . $model->value);
					break;
				case Phrases::TYPE_TEXT:
					break;
				case Phrases::TYPE_HTML:
					break;
			}
			$model->delete();

			if (!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		} else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

}