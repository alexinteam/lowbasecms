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
use app\models\entities\MainSiteConfig;
use yii\filters\AccessControl;


class ConfigController extends Controller
{
    public $layout = '@app/admin/layouts/main.php';

    public function init()
    {
        parent::init();
    }


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'update'],
                'rules' => [
                    [
                        'actions' => ['index','update'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex() {
        $model = MainSiteConfig::find()->one();

        return $this->render('index', [
            'model' => $model
        ]);

    }

    public function actionUpdate() {
        $model = $this->findModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('index',[
                'model' => $model,
                'saved' => true
            ]);
        }
    }

    protected function findModel()
    {
        if (($model = MainSiteConfig::findOne(MainSiteConfig::$ID)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
