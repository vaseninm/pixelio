<?php

class PortfolioController extends PxAdminController
{

    public $defaultAction = 'works';

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete,SetFace', // we only allow deletion via POST request
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'roles' => array(Users::ROLE_ADMIN),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'sortableWorks' => array(
                'class' => 'backend.extensions.sortable.SortableAction',
                'model' => PfWorks::model(),
                'column' => 'position',
            ),
            'sortablePages' => array(
                'class' => 'backend.extensions.sortable.SortableAction',
                'model' => PfPages::model(),
                'column' => 'position',
            ),
        );
    }

    protected function beforeAction($action)
    {
        $return = parent::beforeAction($action);
        $this->menu = array(
            array('label' => 'Работы', 'url' => array('/portfolio/works')),
            array('label' => 'Создать работу', 'url' => array('/portfolio/create')),
            array('label' => 'Управление тегами', 'url' => array('/tags/admin')),
            array('label' => 'Создать тег', 'url' => array('/tags/create')),
        );
        return $return;
    }

    public function actionWorks()
    {
        $model = new PfWorks('search');
        $model->unsetAttributes();
        if (isset($_GET['PfWorks'])) {
            $model->attributes = $_GET['PfWorks'];
        }
        $this->render('works', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $works = new PfWorks;

        $this->performAjaxValidation($works);

        if (isset($_POST['PfWorks'])) {
            $works->attributes = $_POST['PfWorks'];
            $works->status = PfWorks::STATUS_UNAPPROVED;
            if ($works->save()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Новая работа удачно добавлена.');
                $this->redirect(array('works'));
            }
        }

        $this->render('create', array(
            'works' => $works,
        ));
    }


    public function actionUpdate($id)
    {
        $works = $this->loadModel('PfWorks', $id);
        $pages = new PfPages();

        $this->performAjaxValidation($works);
        $this->performAjaxValidation($pages);

        if (isset($_POST['PfWorks'])) {
            $works->attributes = $_POST['PfWorks'];
            if ($works->save()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Работа удачно изменена.');
                $this->refresh();
            }
        } elseif (isset($_POST['PfPages'])) {
            $pages->attributes = $_POST['PfPages'];
            $pages->work_id = $works->id;
            if ($pages->save()) {
                Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Отлично</strong> Новая страница удачно добавлена.');
                $this->refresh();
            }
        }

        $this->render('update', array(
            'works' => $works,
            'pages' => $pages,
            'tags' => $tags = PfTags::getTagsList()
        ));
    }


    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            switch (Yii::app()->request->getParam('ajax')) {
                case 'pf-works-grid':
                    return $this->loadModel('PfWorks', $id)->delete();
                    break;
                case 'pf-pages-grid':
                    return $this->loadModel('PfPages', $id)->delete();
                    break;
            }
        }
        throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionSetFace($page)
    {
        if (Yii::app()->request->isPostRequest) {
            $model = PfPages::model()->findByPk($page);
            if (!$model) throw new CHttpException(500, 'Не существует выбранной страницы');
            $model->work->face_id = $page;
            $model->work->save();
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

}