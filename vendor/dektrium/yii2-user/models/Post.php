<?php

namespace dektrium\user\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $cate_id
 * @property string $title
 * @property string $content
 * @property string $description
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'title', 'content'], 'required'],
            [['content', 'description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate_id' => 'Cate',
            'title' => 'Title',
            'content' => 'Content',
            'description' => 'Description',
        ];
    }
    
}
