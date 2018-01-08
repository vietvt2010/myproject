<?php

namespace dektrium\user\controllers;

use app\models\Navigation;
use yii\data\ActiveDataProvider;
use yii\web\Response;
use yii\helpers\Html;

class NavigationController extends \yii\web\Controller
{
    /**
     * action index
     * @return type
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Navigation::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        
        if (\Yii::$app->request->post('hasEditable')) {
            return $this->_handleEditable();
        }
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * handle editable grid column
     */
    public function _handleEditable()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        
        $id = \Yii::$app->request->post('editableKey');
        $index = \Yii::$app->request->post('editableIndex');
        $attribute = \Yii::$app->request->post('editableAttribute');
        
        $model = Navigation::findOne($id);
        
        if ($model && $model->hasAttribute($attribute)) {
            $attributeValue = \yii\helpers\ArrayHelper::getValue(\Yii::$app->request->post(), "Navigation.$index.$attribute");
            
            $model->setAttribute($attribute, $attributeValue);
            
            if ($model->save(true, [$attribute])) {
                return ['output' => Html::encode($model->$attribute), 'message' => ''];
            } else {
                return ['output' => Html::encode($model->$attribute), 'message' => \yii\helpers\ArrayHelper::getValue($model->getErrors($attribute), '0')];
            }
        }
        
        return ['output' => '', 'message' => ''];
    }
}
