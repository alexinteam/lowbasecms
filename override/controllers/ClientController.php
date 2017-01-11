<?php
/**
 * Created by PhpStorm.
 * User: alexinteam
 * Date: 11.01.2017
 * Time: 19:28
 */

namespace app\override\controllers;

use Yii;
use yii\web\Controller as yiiController;

class ClientController extends yiiController
{
    public function init() {
        if (isset(Yii::$app->user) && Yii::$app->user->can('client')) {
            parent::init();
        } else {
            Yii::$app->response->redirect('/client')->send();
            die();
        }
    }
}