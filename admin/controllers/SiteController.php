<?php
/**
 *
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends PxAdminController
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'roles' => array(Users::ROLE_ADMIN),
            ),
            array('allow',
                'actions' => array('login', 'install'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionLogin()
    {
        if (YII_DEBUG && !$this->install()) {
            throw new CHttpException('500', 'Не настроен файл конфигурации базы.');
        }
        $model = new Users('login');
        if ($model->attributes = Yii::app()->request->getPost('Users')) {
            if ($model->validate() && $model->login()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Вы удачно авторизованы.');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        $this->render('login', array(
            'model' => $model,
        ));
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    protected function install() {

        if (Yii::app()->db->schema->getTable('tbl_migration', true) !== NULL) return true;
        $runner=new CConsoleCommandRunner();
        $commandPath = Yii::getFrameworkPath() . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'commands';
        $runner->addCommands($commandPath);
        $args = array('yiic', 'migrate', '--interactive=0', '--migrationPath=console.migrations');

        ob_start();
        $runner->run($args);
        ob_clean();
        return Yii::app()->db->schema->getTable('tbl_migration', true) !== NULL;
    }
}