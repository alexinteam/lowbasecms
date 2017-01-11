<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\events\controllers;

use Yii;
use app\override\controllers\ClientController;


class EventsController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionCreate() {
        return $this->render('create');
    }

    public function actionArchive() {
        return $this->render('archive');
    }

}
