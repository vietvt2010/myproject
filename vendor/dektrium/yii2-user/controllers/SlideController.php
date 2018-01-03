<?php

namespace dektrium\user\controllers;

use dektrium\user\models\Image;
use yii\helpers\FileHelper;
use yii\web\NotFoundHttpException;
use dektrium\user\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\Json;

class SlideController extends \yii\web\Controller
{
    /**
     * index
     */
    public function actionIndex()
    {
        $model = Image::findAll(['cate' => 'slide']);
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    
    /**
     * upload
     */
    public function actionUpload()
    {
        $model = new UploadForm();
        $image = new Image();
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if ($model->validate() && $model->file !== null) {
                if ($destination = FileHelper::uploadSlide($model->file)) {
                    $image->source = '/' . $destination;
                    $image->cate = 'slide';
                    if ($image->save()) {
                        return $this->redirect('/user/slide');
                    }
                }
            }
            \Yii::$app->session->setFlash('error', 'Upload failed');
            return $this->redirect('/user/slide');
        }
        
        return $this->renderAjax('upload', [
            'model' => $model
        ]);
    }

    /**
     * find model
     */
    public function findModel($id)
    {
        $model = Image::findOne($id);
        
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
