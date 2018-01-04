<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Navigation;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="row" style="margin: 5px;">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="display: table;" class="pull-left">Quản lý mục <?= mb_strtoupper(Navigation::findOne(['id' => $cateId])->name, 'utf8'); ?></h4>
                <?= Html::a('Viết bài', ['create', 'id' => $cateId], ['class' => 'btn btn-success pull-right']) ?>
                <?php if (Yii::$app->session->hasFlash('success') || Yii::$app->session->hasFlash('error')): ?>
                <p class="alert alert-info" style="width: 50%; margin: 0 auto;"><?= implode("<br>", Yii::$app->session->getAllFlashes()) ?></p>
                <?php endif; ?>
            </div>
            <div class="box-body">
                <?php foreach ($posts as $post): ?>
                <div class="col-md-4">
                    <fieldset style="height: 200px; width: 90%; margin: 0 auto;">
                        <legend>
                            <?= $post ? strip_tags(mb_substr($post->title, 0, 40, 'utf8')) : '' ?>
                            <?= Html::a("<i class='fa fa-trash-o'></i>", ['/user/post/delete', 'id' => $post->id], ['class' => 'pull-right', 'title' => 'Xóa bài viết', 'onclick' => "return confirm('Are you sure?')", 'data-method' => 'post']) ?>
                            <?= Html::a("<i class='fa fa-pencil-square-o'></i>", ['/user/post/update', 'id' => $post->id], ['class' => 'pull-right', 'title' => 'Sửa bài viết']) ?>
                        </legend>
                        <p><?= $post ? strip_tags(substr($post->content, 0, 200)) . '...' : '' ?></p>
                    </fieldset>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
