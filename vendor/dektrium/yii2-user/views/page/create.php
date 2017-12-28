<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model dektrium\user\models\Page */

$this->title = 'Tạo trang điều hướng';

?>
<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Tạo trang điều hướng</h4>
            </div>
            <div class="box-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
