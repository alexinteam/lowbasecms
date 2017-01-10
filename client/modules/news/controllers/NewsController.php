<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\news\controllers;

use Yii;
use yii\web\Controller;
use app\models\news\NewsCategory;
use app\models\news\News;


class NewsController extends Controller
{
    public $layout = '@app/client/layouts/main.php';

   

    public function actionCreate() {
        $model = new News();
        return $this->render('create',[
            'categories' => NewsCategory::find()->all(),
            'model' => $model
        ]);
    }

    public function actionArchive() {
        return $this->render('archive');
    }

}
