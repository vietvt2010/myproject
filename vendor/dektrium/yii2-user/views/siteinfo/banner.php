<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Thay đổi banner</h4>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(['id' => 'uploadForm', 'options' => ['enctype' => 'multipart/form-data']]); ?>

                <?= $form->field($model, 'file')->fileInput(['id' => 'file']) ?>

                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>