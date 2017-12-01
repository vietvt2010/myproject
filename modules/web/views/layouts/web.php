<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\web\assets\WebAsset;
use yii\helpers\Url;

WebAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wraper">
        <!-- header -->
        <header id="header" class="container-fluid">
            <div id="top-header" class="row">
                <div class="col-md-2">
                    <strong id="welcome" class="uppercase">CHÀO MỪNG BẠN ĐẾN VỚI My Shop</strong>
                </div>
            </div>
            <div id="main-header" class="row">
                <div class="col-md-2">
                    <img src="<?= Url::to('@web/images/logo.png') ?>" class="img-responsive">
                </div>
            </div>
            <div id="nav-header" class="row">
                
            </div>
        </header>
        <!-- end header -->
        
        <!-- main -->
        <main id="main" class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </main>
        <!-- end main -->
    
        <!-- footer -->
        <footer id="footer" class="footer navbar-fixed-bottom container-fluid">
            <div class="row">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
        <!-- end footer -->
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
