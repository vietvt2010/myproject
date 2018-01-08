<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\web\assets\WebAsset;
use yii\helpers\Url;
use app\models\Navigation;
use dektrium\user\models\Image;
use dektrium\user\models\Siteinfo;

$assets = WebAsset::register($this);

$this->registerJs(
"$(window).on('load', function() {
    $('#slider').nivoSlider(); 
});"
);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="công ty đầu tư việt nam maika, tư vấn du học, nhật bản, kỹ sư nhật bản, lao động nhật bản, xuất khẩu lao động">
        <meta name="description" content="Công ty đầu tư Việt Nam Maika">
        <meta name="robots" content="noodp,index,follow">
        <meta name='revisit-after' content='1 days'>
        <meta http-equiv="content-language" content="vi">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="vietvotrung@admicro.vn">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
        <meta property="og:image" content="http://ia.media-imdb.com/images/rock.jpg">
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Công ty đầu tư Việt Nam Maika" />
        <meta property="og:description" content="Tuyển kỹ sư lao động Nhật Bản" />
        <meta property="og:url" content="http://thegoldennamankhanh.info/" />
        <meta property="og:site_name" content="Công ty đầu tư Việt Nam Maika" />

        <?= Html::csrfMetaTags() ?>
        <title>Công ty đầu tư Việt Nam Maika</title>
        <?php $this->head() ?>

    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>

<?php $this->beginBody() ?>

        <!-- hotline -->
        <div id="hotline">
            <p>
                <b><i class="glyphicon glyphicon-earphone"></i> 01266 384 268</b>
            </p>
        </div>
        <!-- end hotline -->

        <div class="wraper">
            <!-- header -->
            <header id="header" class="container-fluid">
                <!-- top header -->
                <div id="top-header" class="row">
                    <div class="col-md-12">
                        <?php $banner = Image::findOne(['cate' => 'banner']) ?>
                        <img src="<?= $banner ? $banner->source : '' ?>" style="width: 100%;">
                    </div>
                </div>
                <!-- end top header -->

                <!-- nav -->
                <div id="nav-header" class="row">
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <nav id="nav-origin" class="navbar navbar-default">
                            <ul class="nav navbar-nav">
                                <?php
                                    $nav = Navigation::find()->all();
                                    $uri = $_SERVER['REQUEST_URI'];
                                    foreach ($nav as $item):
                                ?>
                                <li class="menu-tab <?= $uri == $item->url ? 'active' : '' ?>"><a href="<?= $item->url ?>"><b><?= $item->name ?></b></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-12 hidden-md hidden-lg">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="nav-toggle">
                                <ul>
                                    <?php
                                        $nav = Navigation::find()->all();
                                        $uri = $_SERVER['REQUEST_URI'];
                                        var_dump($uri);
                                        foreach ($nav as $item):
                                    ?>
                                    <li class="menu-tab <?= $uri == $item->url ? 'active' : '' ?>"><a href="<?= Url::to([$item->url]) ?>"><b><?= $item->name ?></b></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <nav class="navbar navbar-dark bg-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="glyphicon glyphicon-menu-down"></span>
                            </button>
                        </nav>
                    </div>
                </div>
                <!-- end nav -->

                <!-- slide -->
                <div id="slide-header" class="row">
                    <div class="slider-wrapper theme-default col-md-12">
                        <div id="slider" class="nivoSlider">
                            <?php
                                $slides = Image::findAll(['cate' => 'slide']);
                                foreach ($slides as $slide):
                            ?>
                            <img src="<?= $slide ? $slide->source : '' ?>" alt="" />
                            
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- end slide -->
            </header>
            <!-- end header -->

            <!-- main -->
            <main id="main" class="container-fluid">
                <!-- main left -->
                <div id="main-left" class="col-md-2 hidden-sm hidden-xs">
                    <div id="menu" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-education"></i>THÔNG TIN DU HỌC</span></strong>
                        </div>
                        <div class="menu-body">
                            <ul>
                            <?php
                                $duhocPosts = \dektrium\user\models\Post::find()->where(['cate_id' => 2])->limit(8)->all();
                                foreach ($duhocPosts as $post):
                            ?>
                                <li><a href="/web/post/view?id=<?= $post->id ?>"><?= $post->title ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div id="post" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-th-list"></i>THÔNG TIN TUYỂN DỤNG</span></strong>
                        </div>
                        <div class="menu-body">
                            <ul>
                            <?php
                                $duhocPosts = \dektrium\user\models\Post::find()->where(['cate_id' => 3])->limit(8)->all();
                                foreach ($duhocPosts as $post):
                            ?>
                                <li><a href="/web/post/view?id=<?= $post->id ?>"><?= $post->title ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div id="media" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-picture"></i>TIN TỨC MỚI</span></strong>
                        </div>
                        <div class="menu-body">
                            <ul>
                            <?php
                                $duhocPosts = \dektrium\user\models\Post::find()->where(['cate_id' => 5])->limit(8)->all();
                                foreach ($duhocPosts as $post):
                            ?>
                                <li><a href="/web/post/view?id=<?= $post->id ?>"><?= $post->title ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end main left -->

                <!-- main content -->
                <div id="main-content" class="col-md-10">
                    <?= $content ?>
                </div>
                <!-- end main content -->
            </main>
            <!-- end main -->

            <!-- footer -->
            <footer id="footer" class="footer container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 footer-element">
                            <strong>VỀ CHÚNG TÔI</strong>
                            <hr>
                            <?php $about = Siteinfo::findOne(['cate' => 'about']) ?>
                            <p><?= $about ? $about->description : '' ?></p>
                        </div>
                        <div class="col-md-4 footer-element">
                            <strong>LIÊN HỆ</strong>
                            <hr>
                            <?php $contact = Siteinfo::findOne(['cate' => 'contact']) ?>
                            <p><?= $contact ? $contact->description : '' ?></p>

                            <strong>BẢN ĐỒ CHỈ ĐƯỜNG</strong>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.9504585282511!2d105.79587355804452!3d21.036650199942518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab38905d77bb%3A0x6950c945cd6da332!2zTmfDtSAxMiBOZ3V54buFbiBWxINuIEh1ecOqbiwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1515035967595" width="400" height="300" frameborder="0" style="border:0; width: 95%;" allowfullscreen></iframe>

                        </div>
                        <div class="col-md-4 footer-element">
                            <strong>LIÊN KẾT FACEBOOK</strong>
                            <hr>
                            <div class="fb-page" data-href="https://www.facebook.com/MaikakysuNhatBan" height="350px" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MaikakysuNhatBan" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MaikakysuNhatBan">Công Ty Đầu Tư Việt Nam MAIKA</a></blockquote></div>
                        </div>
                    </div>
                </div>

                <div id="copyright" class="row">
                    <p>
                        <b>Copyright 2017 © Thiết kế website tại Hà Nội bởi vietvt <a href="mailto:vietvotrung@admicro.vn">vietvotrung@admicro.vn</a></b>
                    </p>
                </div>
            </footer>
            <!-- end footer -->
        </div>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
