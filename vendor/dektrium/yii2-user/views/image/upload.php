<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title">Upload Image</h4>
</div>
<div class="modal-body">
    <?php $form = ActiveForm::begin(['id' => 'uploadForm', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput(['id' => 'file']) ?>

    <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>
</div>