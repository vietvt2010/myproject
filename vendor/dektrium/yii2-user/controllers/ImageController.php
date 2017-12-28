<?php

namespace dektrium\user\controllers;

use dektrium\user\models\Image;
use yii\web\NotFoundHttpException;
use dektrium\user\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\Json;
use yii\helpers\FileHelper;

class ImageController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    
    public function actionIndex()
    {
        $model = Image::find()->all();
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    
    public function actionDelete($id)
    {
        if ($this->findModel($id)->delete()) {
            return \yii\helpers\Json::encode('success');
        }
    }

    protected function findModel($id)
    {
        $model = Image::findOne($id);
        
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionUpload()
    {
        $model = new UploadForm();
        $image = new Image();
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if ($model->validate() && $model->file !== null) {
                if ($destination = FileHelper::uploadImage($model->file)) {
                    $image->source = '/' . $destination;
                    if ($image->save()) {
                        return $this->redirect('/user/image');
                    }
                }
            }
            \Yii::$app->session->setFlash('error', 'Upload failed');
            return $this->redirect('/user/image');
        }
        
        return $this->renderAjax('upload', [
            'model' => $model
        ]);
    }
}
