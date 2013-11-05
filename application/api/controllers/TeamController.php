<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class TeamController extends PxApiController {

    public function actionList() {
        $pages = ceil(Feedback::model()->count() / Team::PAGE_SIZE);
        $models = Team::model()->page($this->request->page)->findAll(array('order' => 'postion ASC, id DESC'));
        $items = array();
        foreach ($models as $model) {
            $items[] = array(
                'id' => $model->id,
                'fullname' => $model->fullname,
                'position' => $model->postion,
                'about' => $model->about,
                'faceImg' => $model->getImageUrl(Team::TYPE_FACE),
                'fullImg' => $model->getImageUrl(Team::TYPE_IMAGE),
            );
        }
        $this->answer = array(
            'items' => $items,
            'pages' => $pages,
        );
    }

}