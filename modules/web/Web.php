<?php

namespace app\modules\web;

/**
 * web module definition class
 */
class Web extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\web\controllers';
    
    /**
     * @inheritdoc
     */
    public $layout = 'web';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
