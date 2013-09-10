<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class FeedbackController extends PxApiController {

    public function actionList() {
        $pages = ceil(Feedback::model()->approve()->count() / Feedback::PAGE_SIZE);
        $models = Feedback::model()->approve()->page($this->request->page)->findAll(array('order' => 'id DESC'));
        $items = array();
        foreach ($models as $model) {
            $items[] = array(
                'id' => $model->id,
                'text' => $model->text,
                'author' => $model->author,
            );
        }
        $this->answer = array(
            'items' => $items,
            'pages' => $pages,
        );
    }

    public function actionAdd() {
        $model = new Feedback();
        $model->text = $this->request->text;
        $model->author = $this->request->author;
        $model->approve = 1;
        $result = $model->save();
        $this->answer = array(
            'result' => $result,
        );
    }

}