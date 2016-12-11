<?php

namespace app\modules\sites\controllers;

use app\models\entities\Site;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * @param $siteId
     * @return string
     */
    public function actionIndex($siteId)
    {
        $site = $this->findModel($siteId);
        $this->setTheme($site->theme);
        return $this->render('index');
    }

    /**
     * @param $theme
     */
    protected function setTheme($theme){
        $this->viewPath = '@app/themes/sites/' . $theme . '/views/site';
        $this->layout = '@app/themes/sites/' . $theme . '/layouts/main';

        Yii::$app->view->siteTheme = $theme;
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
