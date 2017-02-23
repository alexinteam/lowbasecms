<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\site\controllers;

use app\admin\modules\site\models\SiteSearch;
use app\models\entities\Site;
use Yii;
use yii\web\NotFoundHttpException;
use app\components\vhosts\Manager;
use app\override\controllers\ClientController;


class SiteController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

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

    public function actionCreate() {
        $siteSaved = false;
        if(Yii::$app->request->post()) {
            $model = new Site();
            $model->load(Yii::$app->request->post());
            if($model->save()) {
                $vHostManager = new Manager();
                $vHostManager->addVirtualHost($model->domain);

                return $this->redirect(['/sites/site/edit', 'id' => $model->getId()]);

                //$siteSaved = true;
                //$model = new Site();
            }
            return $this->render('create',['model' => $model, 'siteSaved' => $siteSaved]);
        } else {
            $model = new Site();
            return $this->render('create',['model' => $model]);
        }
    }

    public function actionDelete($id) {
        Site::deleteAll('id =:id', [':id' =>$id]);
        return $this->redirect('index');
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
