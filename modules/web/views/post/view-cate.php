<?php

use app\models\Navigation;
use yii\helpers\Html;

?>

<div id="page-title">
    <h3><?= mb_strtoupper(Navigation::findOne(['id' => $cateId])->name, 'utf8') ?></h3>
</div>
<div style="margin-top: 20px;">
    <?php foreach ($posts as $post): ?>
    <div class="col-md-4">
        <fieldset style="height: 200px; width: 90%; margin: 0 auto;">
            <legend>
                <?= Html::a(strip_tags(mb_substr($post->title, 0, 30, 'utf8')), ['/web/post/view', 'id' => $post->id]) ?>
                <?= Html::a("<i class='fa fa-trash-o'></i>", ['/user/post/delete', 'id' => $post->id], ['class' => 'pull-right', 'title' => 'Xóa bài viết', 'onclick' => "return confirm('Are you sure?')", 'data-method' => 'post']) ?>
                <?= Html::a("<i class='fa fa-pencil-square-o'></i>", ['/user/post/update', 'id' => $post->id], ['class' => 'pull-right', 'title' => 'Sửa bài viết']) ?>
            </legend>
            <?= $post ? strip_tags(substr($post->content, 0, 200)) . '...' : '' ?>
        </fieldset>
    </div>
    <?php endforeach; ?>
</div>