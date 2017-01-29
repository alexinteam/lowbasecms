<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\entities\Restoraunts;
use app\models\entities\RestorauntOptions;

/**
 * Class RestorauntController
 * @package app\controllers
 */
class RestorauntController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
        ];
    }

    public function actionCreate()
    {
        $model = new Restoraunts();
        $model->load(Yii::$app->request->post());
        $model->lb_created_at = (new \DateTime())->format('Y-m-d H:i:s');
        $model->lb_user_id = Yii::$app->user->identity->getId();

        if($model->validate() && $model->save()) {
            $optionsModel = new RestorauntOptions();
            $optionsModel->restoraunt_id = $model->lb_restoraunts_id;
            $optionsModel->restoraunt_bill = Yii::$app->request->post('bill');
            $optionsModel->restoraunt_kitchen = Yii::$app->request->post('kitchen');
            $optionsModel->restoraunt_vk_link = Yii::$app->request->post('vk_link');
            $optionsModel->restoraunt_fb_link = Yii::$app->request->post('fb_link');
            $optionsModel->restoraunt_insta_link = Yii::$app->request->post('insta_link');
            if($optionsModel->validate()) {
                $optionsModel->save();
            }

            return $this->redirect(['/client',
                'saved' => true
            ]);
        } else {
            return $this->redirect('/client');
        }


    }

}
