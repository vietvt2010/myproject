<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel dektrium\user\models\search\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <?php if(Yii::$app->session->hasFlash('success') || Yii::$app->session->hasFlash('error')): ?>
                <p class="alert alert-info"><?= implode("<br>", Yii::$app->session->getAllFlashes()) ?></div>
                <?php endif; ?>
                <h4 style="display: table;" class="pull-left">Quản lý trang điều hướng</h4>
            </div>
            <div class="box-body">
                <div class="page-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <p>
                        <?= Html::a('Create Page', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                    <?php Pjax::begin(); ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                'title',
                                [
                                    'attribute' => 'content',
                                    'value' => function($model) {
                                        return substr($model->content, 0, 200);
                                    },
                                ],
                                'nav_id',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>