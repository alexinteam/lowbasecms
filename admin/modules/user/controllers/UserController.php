<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\admin\modules\user\controllers;

use Yii;
use app\models\Messages;
use lowbase\user\models\User;


class UserController extends \lowbase\user\controllers\UserController
{
    public $layout = '@app/admin/layouts/main.php';

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

    }
}
