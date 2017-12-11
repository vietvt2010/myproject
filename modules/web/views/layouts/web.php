<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\web\assets\WebAsset;
use yii\helpers\Url;

$assets = WebAsset::register($this);

$this->registerJs(
"$(window).on('load', function() {
            $('#slider').nivoSlider(); 
        });"
)
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
        <header id="header" class="container">
            <div id="top-header" class="row">
                <div class="col-md-12">
                    <img src="<?= Url::to($assets->baseUrl . '/images/Banner-da.jpg') ?>" style="width: 100%;">
                </div>
            </div>
            <div id="nav-header" class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <ul class="nav navbar-nav">
                            <li class="active menu-tab"><a href="#">Home</a></li>
                            <li class="menu-tab"><a href="#">Page 1</a></li>
                            <li class="menu-tab"><a href="#">Page 2</a></li>
                            <li class="menu-tab"><a href="#">Page 3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="slide-header" class="row">
                <div class="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                        <img src="<?= Url::to($assets->baseUrl . '/images/toystory.jpg') ?>" data-thumb="images/toystory.jpg" alt="" />
                        <a href="http://dev7studios.com"><img src="<?= Url::to($assets->baseUrl . '/images/up.jpg') ?>" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                        <img src="<?= Url::to($assets->baseUrl . '/images/walle.jpg') ?>" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                        <img src="<?= Url::to($assets->baseUrl . '/images/nemo.jpg') ?>" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption">
                        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                    </div>
                </div>
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

                <p class="pull-right"><?= Yii::powered(); ?></p>
            </div>
        </footer>
        <!-- end footer -->
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
