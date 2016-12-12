<?php

namespace app\models\entities;

use Yii;
use app\models\traits\details\ChildModel as DetailsChildModelTrait;

/**
 * This is the model class for table "tourn_details".
 *
 * @property integer $id
 * @property integer $tourn_id
 * @property string $option
 * @property string $value
 */
class SiteDetail extends \yii\db\ActiveRecord
{
    use DetailsChildModelTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_site_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_id'], 'integer'],
            [['value'], 'string'],
            [['option'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'site_id' => Yii::t('app', 'Site ID'),
            'option' => Yii::t('app', 'Option'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
