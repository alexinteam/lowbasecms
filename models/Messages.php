<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lb_messages".
 *
 * @property integer $message_id
 * @property string $message_text
 * @property integer $from
 * @property integer $to
 * @property string $status
 */
class Messages extends \yii\db\ActiveRecord
{
    const MESSAGE_READ = 'read';
    const MESSAGE_UN_READ = 'unread';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lb_messages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message_id', 'message_text', 'from', 'to', 'status'], 'required'],
            [['message_id', 'from', 'to'], 'integer'],
            [['message_text', 'status'], 'string'],
            [['message_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => 'Message ID',
            'message_text' => 'Message Text',
            'from' => 'From',
            'to' => 'To',
            'status' => 'Status',
        ];
    }
}
