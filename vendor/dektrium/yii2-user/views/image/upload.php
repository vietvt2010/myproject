<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<script>
    function submitForm() {
        var formdata = new FormData($('#uploadForm'));
        $.ajax({
            url: '/user/image/upload',
            type: 'POST',
            data: formdata,
            mimeTypes:'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response){
                var res = JSON.parse(response);
                if (res === 'success') {
                    $('#upload').modal('hide');
                    window.location.reload();
                } else {
                    console.log(res);
                }
            },
            error: function(e){
                console.log(e);
            }
        });
    }
</script>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title">Upload Image</h4>
</div>
<div class="modal-body">
    <?php $form = ActiveForm::begin(['id' => 'uploadForm', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput(['id' => 'file']) ?>

    <?= Html::button('Upload', ['class' => 'btn btn-success', 'onclick' => "return submitForm();"]) ?>

    <?php ActiveForm::end(); ?>
</div>