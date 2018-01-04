<?php

namespace dektrium\user\models;

use Yii;

/**
 * This is the model class for table "siteinfo".
 *
 * @property integer $id
 * @property string $cate
 * @property string $value
 * @property string $description
 */
class Siteinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siteinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate', 'description'], 'required'],
            [['id'], 'integer'],
            [['cate'], 'string', 'max' => 150],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate' => 'Cate',
            'value' => 'Value',
            'description' => 'Description',
        ];
    }
}
