<?php

class PxPhpAuthManager extends CPhpAuthManager {

	public function init(){
		// Иерархию ролей расположим в файле auth.php в директории config приложения
		if($this->authFile===null){
			$this->authFile=Yii::getPathOfAlias('common.config.auth').'.php';
		}

		parent::init();

		// Для гостей у нас и так роль по умолчанию guest.
		if(!Yii::app()->user->isGuest) {
			$this->assign(Yii::app()->user->role, Yii::app()->user->id);
		} else {
			$this->assign(Users::ROLE_GUEST, Yii::app()->user->id);
		}
	}
}