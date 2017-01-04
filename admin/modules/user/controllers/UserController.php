<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\admin\modules\user\controllers;

use Yii;
use yii\helpers\Url;
use app\models\Messages;
use lowbase\user\models\User;
use yii\helpers\Json;


class UserController extends \lowbase\user\controllers\UserController
{
    public $layout = '@app/admin/layouts/main.php';

}
