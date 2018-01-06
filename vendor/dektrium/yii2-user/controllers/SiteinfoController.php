<?php

namespace dektrium\user\controllers;

use dektrium\user\models\Image;
use yii\web\NotFoundHttpException;
use dektrium\user\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use dektrium\user\models\Siteinfo;

class SiteinfoController extends \yii\web\Controller
{
    /**
     * banner
     */
    public function actionUploadBanner()
    {
        $model = new UploadForm();
        $image = new Image();
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if ($model->validate() && $model->file !== null) {
                if ($destination = FileHelper::uploadBanner($model->file)) {
                    $image->source = '/' . $destination;
                    $image->cate = 'banner';
                    if ($image->save()) {
                        $currentBanner = Image::findOne(['cate' => 'banner']);
                        $currentBanner->delete();
                        
                        return $this->redirect('/user');
                    }
                }
            }

            return $this->redirect('/user');
        }
        
        return $this->render('banner', [
            'model' => $model
        ]);
    }
    
    /**
     * about
     */
    public function actionAbout()
    {
        $model = Siteinfo::findOne(['cate' => 'about']);
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->cate = 'about';
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Success');
            } else {
                \Yii::$app->session->setFlash('error', $model->getErrors());
            }
            
            return $this->redirect('/user');
        }
        
        return $this->render('text-form', [
            'model' => $model
        ]);
    }
    
    /**
     * contact
     */
    public function actionContact()
    {
        $model = Siteinfo::findOne(['cate' => 'contact']);
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->cate = 'contact';
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Success');
            } else {
                \Yii::$app->session->setFlash('error', $model->getErrors());
            }
            
            return $this->redirect('/user');
        }
        
        return $this->render('text-form', [
            'model' => $model
        ]);
    }
    
    /**
     * connect
     */
    public function actionConnect()
    {
        $model = Siteinfo::findOne(['cate' => 'connect']);
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->cate = 'connect';
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Success');
            } else {
                \Yii::$app->session->setFlash('error', $model->getErrors());
            }
            
            return $this->redirect('/user');
        }
        
        return $this->render('text-form', [
            'model' => $model
        ]);
    }

}
