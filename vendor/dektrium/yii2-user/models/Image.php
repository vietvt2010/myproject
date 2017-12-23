<?php

namespace dektrium\user\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property string $id
 * @property string $source
 * @property string $cate
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source'], 'required'],
            [['source'], 'string', 'max' => 255],
            [['cate'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source' => 'Source',
            'cate' => 'Cate',
        ];
    }
}
