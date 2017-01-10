<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\bookings\controllers;

use Yii;
use yii\web\Controller;


class BookingsController extends Controller
{
    public $layout = '@app/client/layouts/main.php';

   

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionArchive() {
        return $this->render('archive');
    }

}
