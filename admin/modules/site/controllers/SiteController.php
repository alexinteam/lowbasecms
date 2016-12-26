<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\admin\modules\site\controllers;

use app\admin\modules\site\models\SiteSearch;
use app\models\entities\Site;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class SiteController extends Controller
{
    public $layout = '@app/admin/layouts/main.php';

    /**
     * @return string
     */
    public function actionIndex() {
        $searchModel = new SiteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

        //return $this->render('index');
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->getId()]);
        } else {
            return $this->render('update',[
                'model' => $model,
            ]);
        }
    }

    /**
     * Finds the Site model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Site the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Site::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
