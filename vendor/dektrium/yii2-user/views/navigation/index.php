<?php
/* @var $this yii\web\View */

use kartik\editable\Editable;
use kartik\grid\GridView;
?>
<?php
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