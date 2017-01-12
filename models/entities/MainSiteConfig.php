<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "lb_main_site_config".
 *
 * @property string $site_name
 * @property string $phone
 * @property string $address
 * @property string $contact_email
 */
class MainSiteConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static $ID = 1;

    public static $monthArr = [
                                1 => 'Январь',
                                2 => 'Февраль',
                                3 => 'Март',
                                4 => 'Апрель',
                                5 => 'Май',
                                6 => 'Июнь',
                                7 => 'Июль',
                                8 => 'Август',
                                9 => 'Сентябрь',
                                10 => 'Октябрь',
                                11 => 'Ноябрь',
                                12 => 'Декабрь'
                            ];

    public static function tableName()
    {
        return 'lb_main_site_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name', 'address', 'contact_email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 45],
            [['site_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site_name' => 'Site Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'contact_email' => 'Contact Email',
        ];
    }
}
