<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\user\controllers;

use Yii;
use yii\helpers\Url;
use app\models\Messages;
use lowbase\user\models\User;
use yii\helpers\Json;


class UserController extends \lowbase\user\controllers\UserController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionListMessages() {
        $me = Yii::$app->user->identity;
        $users = User::find()
            ->where('`id` <> :id', [
                ':id' => $me->id
            ])
            ->all();

        $messages = Messages::find()
        ->Select('m.*, u.first_name as fromFirstname, u.last_name as fromLastname,')
        ->From(Messages::tableName().' AS m')
        ->LeftJoin(User::tableName().' AS u','m.`from` = u.`id`')
        ->Where('`to` =:to', [
            'to' => $me->id
        ])->asArray()->all();

        return $this->render('messages',[
            'me' => $me,
            'messages' => $messages,
            'users' => $users
        ]);
    }

    public function actionSendMessage() {
        $request = Yii::$app->request->post();
        $message = new Messages();
        $me = Yii::$app->user->identity;

        $message->to = $request['to'];
        $message->message_text = $request['message'];
        $message->from = $me->id;
        $message->status = $message::MESSAGE_UN_READ;
        if($message->save()) {
            return [
                'status' => true
            ];
        }
        return [
            'status' => false,
            'errors' => Json::encode($message->errors)
        ];
    }

    public function actionReadAllMessages() {
        $me = Yii::$app->user->identity;
        Messages::updateAll(['status' => Messages::MESSAGE_READ],['`to`' => $me->id]);
        return $this->redirect('/client-user/user/list-messages');
    }
}
