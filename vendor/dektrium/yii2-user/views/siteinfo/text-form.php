<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
?>

<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Thay đổi thông tin về chúng tôi</h4>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                    'options' => ['rows' => 6,],
                    'preset' => 'full'
                ]) ?>

                <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>