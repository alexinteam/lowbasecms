<?php

namespace app\modules\sites\controllers;

use app\modules\admin\components\BaseController;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
       return 'sites';
    }
}
