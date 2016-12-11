<?php

namespace app\modules\sites\controllers;

use app\models\entities\Site;
use app\modules\admin\components\BaseController;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    public function actionIndex($siteId)
    {
        $site = $this->findModel($siteId);
        return $site->id;
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
