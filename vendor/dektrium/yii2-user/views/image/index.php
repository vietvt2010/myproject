<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>

<script>
    function deleteImage(id){
        $.ajax({
            url: '/user/image/delete?id=' + id,
            type: 'post',
            success: function(response){
                var res = JSON.parse(response);
                if (res === 'success') {
                    alert('Delete success');
                    window.location.reload();
                }
            }
        });
    }
</script>

<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Hình ảnh</h4>
                <?= Html::a('Upload', ['/user/image/upload'], [
                    'class' => 'btn btn-success pull-right ModalTrigger',
                    'data-toggle' => 'modal',
                    'data-target' => '#upload',
                    'data-width' => 600
                ]) ?>
            </div>
            <div class="box-body">
                <?php foreach ($model as $item): ?>
                <div class="col-md-2" style="text-align: center;">
                    <img src="<?= $item->source ?>" class="img img-responsive" width="100%">
                    <p><?= $item->source ?></p>
                    <?= Html::a("<i class='fa fa-trash-o'></i>", ['#'], ['title' => 'Xóa ảnh', 'onclick' => "return deleteImage($item->id);"]) ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
