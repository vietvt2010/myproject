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
    public $sourcePath = '@webassets/dist';
    public $baseUrl = '@webassets/dist';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
}
