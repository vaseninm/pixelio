<?php
/**
 *
 * SiteController class
 *
 */
class SiteController extends EController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

    public function actionProject($name){

        $allowView = array(
            'about',
            'flash',
            'banners',
            'promo',
            'sites',
            'contacts'
        );

        if (!in_array($name, $allowView)){
            throw new CHttpException(404);
        }

        $this->render($name);
    }
}
