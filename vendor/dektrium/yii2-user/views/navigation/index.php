<?php
/* @var $this yii\web\View */

use kartik\editable\Editable;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;

?>

<div class="row" style="margin: 5px">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Quản lý danh mục</h4>
            </div>
            
            <div class="box-body">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'options' => ['width' => '10px'],
                        ],
                        [
                            'attribute' => 'name',
                            'class' => 'kartik\grid\EditableColumn',
                            'editableOptions' => function ($model, $key, $index) {
                                return [
                                    'readonly' => false,
                                    'inputType' => Editable::INPUT_TEXT,
                                    'options' => []
                                ];
                            },
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>