<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\admin\modules\config\controllers;

use Yii;
use yii\web\Controller;


class ConfigController extends Controller
{
    public $layout = '@app/admin/layouts/main.php';

    public function actionIndex() {
        return $this->render('index');
    }

}
