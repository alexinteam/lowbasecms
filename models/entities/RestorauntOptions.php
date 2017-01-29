<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "lb_restoraunt_options".
 *
 * @property integer $id
 * @property integer $restoraunt_id
 * @property string $restoraunt_bill
 * @property string $restoraunt_kitchen
 * @property string $restoraunt_vk_link
 * @property string $restoraunt_fb_link
 * @property string $restoraunt_insta_link
 */
class RestorauntOptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_restoraunt_options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['restoraunt_id'], 'required'],
            [['restoraunt_id'], 'integer'],
            [['restoraunt_bill'], 'string', 'max' => 45],
            [['restoraunt_kitchen', 'restoraunt_vk_link', 'restoraunt_fb_link', 'restoraunt_insta_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'restoraunt_id' => 'Restoraunt ID',
            'restoraunt_bill' => 'Restoraunt Bill',
            'restoraunt_kitchen' => 'Restoraunt Kitchen',
            'restoraunt_vk_link' => 'Restoraunt Vk Link',
            'restoraunt_fb_link' => 'Restoraunt Fb Link',
            'restoraunt_insta_link' => 'Restoraunt Insta Link',
        ];
    }
}
