<?php

namespace app\modules\sites\models;

use yii\base\Model;
use yii\web\Controller;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['name', 'message'], 'string'],
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $attributeLabels = [
            'name' => 'Имя',
            'email' => 'Email',
            'message' => 'Текст Сообщения',
        ];

        return $attributeLabels;
    }
}