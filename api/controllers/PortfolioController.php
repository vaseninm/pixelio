<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 22:51
 * To change this template use File | Settings | File Templates.
 */

class PortfolioController extends PxApiController {

    public function actionCost() {
        $models = PfTags::model()->findAll();
        $item = array();
        foreach ($models as $model) {
            $item[] = array(
                'id' => $model->id,
                'title' => $model->title,
                'price' => $model->price,
                'desc' => $model->desc,
            );
        }

    }

}