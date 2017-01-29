<?php

namespace app\models;

use Yii;
use app\models\User;

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
            [['message_text', 'from', 'to', 'status'], 'required'],
            [['from', 'to'], 'integer'],
            [['message_text', 'status'], 'string']
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

    public static function getLatestUnreadMessages($user_id) {
        return self::find()->where('`to` =:user_id AND `status` =:status', [
            ':user_id' => $user_id,
            ':status' => self::MESSAGE_UN_READ
        ])->all();
    }

    public static function getUserFLName($user_id) {
        $user = User::find('')->where('`id` =:user_id', [
            ':user_id' => $user_id
        ])->one();

        return $user->last_name.' '.$user->first_name;
    }
}
