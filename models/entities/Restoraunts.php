<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "lb_restoraunts".
 *
 * @property integer $lb_restoraunts_id
 * @property string $lb_restoraunts_name
 */
class Restoraunts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_restoraunts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lb_restoraunts_name'], 'required'],
            [['lb_restoraunts_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lb_restoraunts_id' => 'Lb Restoraunts ID',
            'lb_restoraunts_name' => 'Lb Restoraunts Name',
        ];
    }
}
