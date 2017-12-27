<?php

namespace dektrium\user\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file;
    
    public function rules()
    {
        return [
            [['file'], 'file', 'extensions' => 'png, jpg, gif', 'maxSize' => 1024000, 'tooBig' => 'Limit is 1MB'],
            ['file', 'required'],
        ];
    }
}