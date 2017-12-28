<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\web\assets\WebAsset;
use yii\helpers\Url;
use app\models\Navigation;

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
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

<?php $this->beginBody() ?>

        <!-- hotline -->
        <div id="hotline">
            <p>
                <b>HOTLINE</b><br>
                <span><b>0913 828 222</b></span>
            </p>
        </div>
        <!-- end hotline -->

        <div class="wraper">
            <!-- header -->
            <header id="header" class="container">
                <!-- top header -->
                <div id="top-header" class="row">
                    <div class="col-md-12">
                        <img src="<?= Url::to($assets->baseUrl . '/images/Banner-da.jpg') ?>" style="width: 100%;">
                    </div>
                </div>
                <!-- end top header -->

                <!-- nav -->
                <div id="nav-header" class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <ul class="nav navbar-nav">
                                <?php
                                    $nav = Navigation::find()->all();
                                    foreach ($nav as $item):
                                ?>
                                <li class="menu-tab <?= $_SERVER['REQUEST_URI'] == $item->url ? 'active' : '' ?>"><a href="<?= $item->url ?>"><b><?= $item->name ?></b></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end nav -->

                <!-- slide -->
                <div id="slide-header" class="row">
                    <div class="slider-wrapper theme-default col-md-12">
                        <div id="slider" class="nivoSlider">
                            <img src="<?= Url::to($assets->baseUrl . '/images/toystory.jpg') ?>" data-thumb="images/toystory.jpg" alt="" />
                            <a href="http://dev7studios.com"><img src="<?= Url::to($assets->baseUrl . '/images/up.jpg') ?>" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                            <img src="<?= Url::to($assets->baseUrl . '/images/walle.jpg') ?>" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                            <img src="<?= Url::to($assets->baseUrl . '/images/nemo.jpg') ?>" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
                        </div>
                        <!--                        <div id="htmlcaption" class="nivo-html-caption">
                                                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                                                </div>-->
                    </div>
                </div>
                <!-- end slide -->
            </header>
            <!-- end header -->

            <!-- main -->
            <main id="main" class="container">
                <!-- main left -->
                <div id="main-left" class="col-md-3">
                    <div id="menu" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-education"></i>THÔNG TIN DU HỌC</span></strong>
                        </div>
                        <div class="menu-body">
                            <ul>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="post" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-th-list"></i>BÀI VIẾT ĐƯỢC QUAN TÂM</span></strong>
                        </div>
                        <div class="menu-body">
                            <ul>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                                <li><a href="#">Tuyển sinh Du học Nhật Bản</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="media" class="left-block">
                        <div class="menu-head">
                            <strong><span><i class="glyphicon glyphicon-picture"></i>ALBUM ẢNH</span></strong>
                        </div>
                        <div class="menu-body">

                        </div>
                    </div>
                </div>
                <!-- end main left -->

                <!-- main content -->
                <div id="main-content" class="col-md-9">
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
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
                            <strong>GIỚI THIỆU VỀ KOKONO</strong>
                            <hr>
                            <p>Trải qua hơn 10 năm hình thành và phát triển, 
                                Công ty CP Tư vấn Du học KOKONO - Đơn vị thành viên thuộc TẬP ĐOÀN KẾ TOÁN HÀ NỘI hoạt động thành công trong lĩnh vực tư vấn du học Nhật Bản,
                                Du học Hàn Quốc, Đào tạo Tiếng Nhật, Tiếng Trung, Tiếng Hàn. Hiện tại với 47 Chi nhánh trên toàn quốc,
                                Kokono sẽ tiếp tục là cầu nối hữu hiệu giúp các tài năng trẻ Việt Nam đến với những ...</p>
                        </div>
                        <div class="col-md-4 footer-element">
                            <strong>LIÊN HỆ</strong>
                            <hr>
                            <p>Địa chỉ: Số 04 ngõ 322 Lê Trọng Tấn, Thanh Xuân, Hà Nội<br>
                                Tel: ‎04 33945 999 Hotline: 0913 828 222 - 0989 212 668<br>
                                Email: duhockokono@gmail.com<br>
                                Website: www.duhockokono.vn</p>

                            <strong>BẢN ĐỒ CHỈ ĐƯỜNG</strong>
                            <hr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.161958496375!2d105.79388031486204!3d20.986143994607826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc651f1a5d3%3A0x59a99bfb3c117b80!2zNTQzIE5ndXnhu4VuIFRyw6NpLCBWxINuIFF1w6FuLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1513652003950" height="250" frameborder="0" style="border:0; width: 95%;" allowfullscreen></iframe>

                        </div>
                        <div class="col-md-4 footer-element">
                            <strong>LIÊN KẾT FACEBOOK</strong>
                            <hr>
                            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
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
