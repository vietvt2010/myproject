<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\helpers;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;
/**
 * File system helper
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Alex Makarov <sam@rmcreative.ru>
 * @since 2.0
 */
class FileHelper extends BaseFileHelper
{
    /**
     * Upload a file
     * @param string $image file name to be upload
     * @return string the file path after upload
     */
    public static function uploadImage($image)
    {
        $destination = Yii::$app->params['imagePath'] . $image->baseName . time() . '.' . $image->extension;
        
        if ($image->saveAs($destination)) {
            return $destination;
        }
        
        return false;
    }
    
    /**
     * @param object $model object of model to update
     * @param string $destination value of image property
     */
    public static function updateImage($model, $destination)
    {
        $model->updateAttributes(['image' => $destination]);
        Yii::$app->session->setFlash('success', 'Update product successfully!');
    }
    
    
    /**
     * 
     */
    public static function resizeImage($destination)
    {
        Image::getImagine()->open($destination)->resize(new Box(400, 460))->save($destination);
    }
    
    public static function uploadSlide($image)
    {
        $destination = Yii::$app->params['imagePath'] . $image->baseName . time() . '.' . $image->extension;
        
        if ($image->saveAs($destination)) {
            Image::getImagine()->open($destination)->resize(new Box(500, 199))->save($destination);
            return $destination;
        }
        
        return false;
    }
}
