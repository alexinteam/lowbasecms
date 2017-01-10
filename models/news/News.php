<?php

namespace app\models\news;

use Yii;

/**
 * This is the model class for table "lb_news".
 *
 * @property integer $news_id
 * @property string $news_title
 * @property integer $news_category_id
 * @property string $news_date
 * @property string $news_image
 * @property string $news_text
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_title', 'news_category_id'], 'required'],
            [['news_category_id'], 'integer'],
            [['news_date'], 'safe'],
            [['news_text'], 'string'],
            [['news_title', 'news_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_title' => 'News Title',
            'news_category_id' => 'News Category ID',
            'news_date' => 'News Date',
            'news_image' => 'News Image',
            'news_text' => 'News Text',
        ];
    }
}
