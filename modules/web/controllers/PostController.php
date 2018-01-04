<?php

namespace app\modules\web\controllers;

use dektrium\user\models\Post;

class PostController extends \yii\web\Controller
{
    /**
     * view cate post
     * @param integer $id
     * @return mixed
     */
    public function actionViewCate($id)
    {
        $posts = Post::find()->where(['cate_id' => $id])->limit(15)->all();

        return $this->render('view-cate', [
            'posts' => $posts,
            'cateId' => $id,
        ]);
    }
    
    /**
     * view post
     * @param integer $id id of post
     */
    public function actionView($id)
    {
        $post = Post::findOne(['id' => $id]);
        
        return $this->render('view', [
            'post' => $post, 
        ]);
    }

}
