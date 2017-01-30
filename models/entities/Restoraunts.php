<?php

namespace app\models\entities;

use Yii;

use app\models\entities\RestorauntOptions;

/**
 * This is the model class for table "lb_restoraunts".
 *
 * @property integer $lb_restoraunts_id
 * @property string $lb_restoraunts_name
 * @property string $lb_user_id
 * @property integer $lb_featured
 * @property string $lb_created_at
 * @property string $lb_inn
 * @property string $lb_phone
 * @property string $lb_phone2
 * @property string $lb_director
 * @property string $lb_additional_contact
 * @property string $lb_restoraunt_email
 * @property integer $lb_total_tables
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
            [['lb_restoraunts_name', 'lb_created_at', 'lb_inn'], 'required'],
            [['lb_restoraunts_name','lb_additional_contact'], 'string', 'max' => 255],
            [['lb_total_tables'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lb_restoraunts_id' => 'Restoraunt ID',
            'lb_restoraunts_name' => 'Название Вашей организации',
            'lb_created_at' => 'Restoraunts Created At',
            'lb_inn' => 'Инн Вашей организации',
            'lb_phone' => 'Контактный телефон организации',
            'lb_phone2' => 'Контактный телефон организации 2',
            'lb_director' => 'ФИО генерального директора',
            'lb_additional_contact' => 'Дополнительные контакты',
            'lb_restoraunt_email' => 'Почта компании',
            'lb_total_tables' => 'Макс. Кол-во человек в ресторане'
        ];
    }
}
