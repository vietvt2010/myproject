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
    ];
    public $js = [
        'js/web.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['forceCopy'] = true;
    }
    
}
