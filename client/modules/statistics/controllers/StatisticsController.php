<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\statistics\controllers;

use app\components\googleAnalytics\GoogleAnalyticsWrapper;
use Yii;
use app\override\controllers\ClientController;


class StatisticsController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionIndex() {

        $ga = new GoogleAnalyticsWrapper();
        $gaStats = $ga->getStats();

        return $this->render('index', ['gaStats' => $gaStats]);
    }
}
