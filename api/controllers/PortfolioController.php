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
        $this->answer = array(
            'tags' => $item,
        );
    }

    public function actionWorks() {
        $criteria = new CDbCriteria();
        $criteria->scopes = array('approve');
        $countWorks = PfWorks::model()->count($criteria);
        $currentTag = 0;
        if (isset($this->request->tag) && $this->request->tag > 0) {
            $criteria->scopes['tag'] = array($this->request->tag);
        }
        $page = isset($this->request->page) ? $this->request->page : 1;
        $countPages = ceil(PfWorks::model()->count($criteria) / PfWorks::PAGE_SIZE);
        $criteria->scopes['page'] = array($page);
        $workModels = PfWorks::model()->findAll($criteria);
        $worksList = array();
        foreach ($workModels as $work) {
            $worksList[] = array(
                'id' => $work->id,
                'title' => $work->title,
                'face' => $work->face->getImageUrl(PfPages::TYPE_FACE),
            );
        }
        $tags = PfTags::model()->findAll();
        $tagList = array();
        foreach ($tags as $tag) {
            $tagList[] = array(
                'id' => $tag->id,
                'title' => $tag->title,
                'worksCount' => $tag->worksCount,
            );
        }
        $this->answer = array(
            'pages' => $countPages,
            'works' => $worksList,
            'tags' => $tagList,
            'countWorks' => $countWorks,
        );
    }

    public function actionWork() {
        $work = PfWorks::model()->findByPk($this->request->work);
        $next=PfWorks::model()->approve()->find(array(
            'condition' => 'id>:current_id',
            'order' => 'id ASC',
            'limit' => 1,
            'params'=>array(':current_id'=>$this->request->work),
        ));
        $prev=PfWorks::model()->approve()->find(array(
            'condition' => 'id<:current_id',
            'order' => 'id DESC',
            'limit' => 1,
            'params'=>array(':current_id'=>$this->request->work),
        ));

        $pages = array();
        foreach($work->pages as $page) {
            $pages[] = array(
                'id' => $page->id,
                'title' => $page->title,
                'face' => $page->getImageUrl(PfPages::TYPE_FACE),
                'image' => $page->getImageUrl(PfPages::TYPE_IMAGE),
                'full' => $page->getImageUrl(PfPages::TYPE_FULL),
            );
        }
        $tags = array();
        foreach($work->tags as $tag) {
            $tags[] = array(
                'id' => $tag->id,
                'title' => $tag->title,
            );
        }
        $this->answer = array(
            'pages' => $pages,
            'tags' => $tags,
            'work' => array(
                'id' => $work->id,
                'title' => $work->title,
                'desc' => $work->desc,
                'createTime' => $work->createTime,
            ),
            'next' => array(
                'id' => isset($next) ? $next->id : false,
                'title' => isset($next) ? $next->title : false,
            ),
            'prev' => array(
                'id' => isset($prev) ? $prev->id : false,
                'title' => isset($prev) ? $prev->title : false,
            ),
        );
    }

}