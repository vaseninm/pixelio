<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vaseninm
 * Date: 05.09.13
 * Time: 17:29
 * To change this template use File | Settings | File Templates.
 */

class BlogController extends PxApiController {

    public function actionList() {
        $pages = ceil(BlogPosts::model()->count() / BlogPosts::PAGE_SIZE);
        $models = BlogPosts::model()->page($this->request->page)->findAll(array('order' => 'id DESC'));
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

    public function actionCommentsList($post) {
        $post = BlogPosts::model()->findByPk($post);

        $pages = ceil(BlogComments::model()->count() / BlogComments::PAGE_SIZE);
        $models = BlogPosts::model()->post($post)->page($this->request->page)->findAll(array('order' => 'id DESC'));
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

    public function actionCommentsAdd($post) {
        $post = BlogPosts::model()->findByPk($post);

        if ($post) throw new CHttpException(404);

        $model = new BlogComments();
        $model->text = $this->request->text;
        $model->author = $this->request->author;
        $model->post_id = $post;

        $result = $model->save();
        $this->answer = array(
            'result' => $result,
        );
    }

}