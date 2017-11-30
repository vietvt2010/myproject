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
    public $sourcePath = '@app/modules/web/assets/dist';
    public $baseUrl = '@app/modules/web/assets/dist/images';
    public $css = [
        
    ];
    public $js = [
        
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
