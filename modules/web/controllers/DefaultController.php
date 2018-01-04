<?php

namespace app\modules\web\controllers;

use yii\web\Controller;
use dektrium\user\models\Page;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `web` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('view-page', [
            'pageModel' => $this->findPageModel(Page::DEFAULT_PAGE_ID),
        ]);
    }
    
    /**
     * view page
     * @param int $id
     * @return string
     */
    public function actionViewPage($id)
    {
        return $this->render('view-page', [
            'pageModel' => $this->findPageModel($id),
        ]);
    }
    
    /**
     * find page model
     */
    public function findPageModel($id)
    {
        if (($pageModel = Page::findOne($id)) !== null) {
            return $pageModel;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    /**
     * contact
     */
    public function actionContact()
    {
        $model = \dektrium\user\models\Siteinfo::findOne(['cate' => 'contact']);
        
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
