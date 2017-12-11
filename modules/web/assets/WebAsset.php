<?php
/**
 * Web asset
 * @author vietvt <vietvotrung@admicro.vn>
 */
namespace app\modules\web\assets;
use yii\web\AssetBundle;

class WebAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@webassets/assets/dist/';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/themes/default/default.css',
//        'css/themes/light/light.css',
//        'css/themes/dark/dark.css',
//        'css/themes/bar/bar.css',
        'css/nivo-slider.css',
    ];
    public $js = [
        'js/web.js',
        'js/jquery.nivo.slider.js',
        'js/jquery.nivo.slider.pack.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['forceCopy'] = YII_ENV_DEV;
    }
    
}
