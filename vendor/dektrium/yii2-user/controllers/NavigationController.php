<?php

namespace dektrium\user\controllers;

use app\models\Navigation;
use yii\data\ActiveDataProvider;

class NavigationController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Navigation::find(),
        ]);
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
