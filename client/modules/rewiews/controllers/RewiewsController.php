<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\rewiews\controllers;

use Yii;
use app\override\controllers\ClientController;


class RewiewsController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

   

    public function actionOther() {
        return $this->render('other');
    }

    public function actionSite() {
        return $this->render('site');
    }

    public function actionOrder() {
        return $this->render('order');
    }

}
