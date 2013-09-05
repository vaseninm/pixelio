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
        $count = Feedback::model()->approve()->count();
        $models = Feedback::model()->approve()->page($this->request->page)->findAll();
        $items = array();
        foreach ($models as $model) {
            $items[] = array(
                'id' => $model->id,
//                'title' => $model->title,
                'text' => $model->text,
                'author' => $model->author,
            );
        }
        $this->answer = array(
            'items' => $items,
            'count' => $count,
        );
    }

    public function actionAdd() {
        $model = new Feedback();
//        $model->title = $this->request->title;
        $model->text = $this->request->text;
        $model->author = $this->request->author;
        $model->approve = 0;
        $result = $model->save();
        $this->answer = array(
            'result' => $result,
        );
    }

}