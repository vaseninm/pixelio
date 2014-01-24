<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class SimplePortfolioController extends PxApiController {

    public function actionList() {
        $pages = ceil(SimplePortfolio::model()->count() / SimplePortfolio::PAGE_SIZE);
        $models = SimplePortfolio::model()
            ->page(isset($this->request->page) ? $this->request->page : 1)
            ->findAll(array('order' => 'sort ASC, id DESC'));
        $items = array();
        foreach ($models as $model) {
            $items[] = array(
                'id' => $model->id,
                'title' => $model->title,
                'url' => $model->url,
                'desc' => $model->desc,
                'faceImg' => $model->faceImg->getUrl(SimplePortfolio::TYPE_FACE),
                'fullImg' => $model->fullImg->getUrl(SimplePortfolio::TYPE_IMAGE),
            );
        }
        $this->answer = array(
            'items' => $items,
            'pages' => $pages,
        );
    }

}