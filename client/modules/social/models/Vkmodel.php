<?php

namespace app\client\modules\social\models;

use Yii;

/**
 * This is the model class for table "lb_news".
 *
 * @property integer $id
 * @property string $post_title
 * @property integer $post_image
 * @property integer $restoraunt_id
 */
class Vkmodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vk_posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['restoraunt_id', 'post_title'], 'required'],
            [['restoraunt_id'], 'integer'],
            [['post_title'], 'string'],
            [['post_image', 'post_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_title' => 'Post Title',
            'post_image' => 'News Image',
        ];
    }
}
