<?php

namespace dektrium\user\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $nav_id
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * constant default page id
     */
    const DEFAULT_PAGE_ID = 1;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'nav_id'], 'required'],
            [['content'], 'string'],
            [['nav_id'], 'integer'],
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
            'title' => 'Title',
            'content' => 'Content',
            'nav_id' => 'Nav ID',
        ];
    }
}
