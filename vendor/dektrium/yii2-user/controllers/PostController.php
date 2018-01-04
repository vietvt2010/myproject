<?php

namespace dektrium\user\controllers;

use Yii;
use dektrium\user\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * view category
     * @return mixed
     */
    public function actionViewCate($id)
    {
        $posts = Post::findAll(['cate_id' => $id]);

        return $this->render('view-cate', [
            'posts' => $posts,
            'cateId' => $id,
        ]);
    }

    /**
     * Creates a new Post into specify cate
     * @param int $id cate id
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post())) {
            $model->cate_id = $id;
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Tạo bài viết thành công!');
            } else {
                \Yii::$app->session->setFlash('error', $model->getErrors());
            }
            
            return $this->redirect(['view-cate', 'id' => $id]);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Sửa bài viết thành công!');
            } else {
                \Yii::$app->session->setFlash('error', $model->getErrors());
            }
            
            return $this->redirect(['view-cate', 'id' => $model->cate_id]);
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();

        return $this->redirect(['view-cate', 'id' => $model->cate_id]);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
