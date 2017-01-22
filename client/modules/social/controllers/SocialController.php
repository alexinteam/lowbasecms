<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\social\controllers;

use Yii;
use app\override\controllers\ClientController;


class SocialController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionVk() {
        return $this->render('vkontakte');
    }

    public function actionFacebook() {
        return $this->render('facebook');
    }

    public function actionInstagram() {
        return $this->render('instagram');
    }

}
