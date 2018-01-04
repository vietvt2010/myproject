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
        $model = new Siteinfo();
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->cate = 'about';
            if ($model->validate()) {
                $current = Siteinfo::findOne(['cate' => 'about']);
                if ($current !== null) {
                    $current->delete();
                }
                $model->save(false);
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
        $model = new Siteinfo();
        
        if ($model->load(\Yii::$app->request->post())) {
            $model->cate = 'contact';
            if ($model->validate()) {
                $current = Siteinfo::findOne(['cate' => 'contact']);
                if ($current !== null) {
                    $current->delete();
                }
                $model->save(false);
            }
            
            return $this->redirect('/user');
        }
        
        return $this->render('text-form', [
            'model' => $model
        ]);
    }

}
