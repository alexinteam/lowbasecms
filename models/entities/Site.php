<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "lb_sites".
 *
 * @property integer $id
 * @property string $name
 * @property integer $domain
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'domain'], 'required'],
            [['name', 'domain'], 'string'],
            ['domain', 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'domain' => 'Domain',
        ];
    }
}
