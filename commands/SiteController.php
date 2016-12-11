<?php

namespace app\commands;

use app\components\vhosts\Manager;
use app\models\entities\Site;
use Yii;
use yii\console\Controller;

class SiteController extends Controller {
    public function actionCreate($name,$domain){
        echo "Job started \n";

        /* @var $vhostsManager \app\components\vhosts\Manager */
        //$vhostsManager = Yii::$app->vhostsManager;
        $vhostsManager = new Manager();

        $site = new Site();
        $site->name = $name;
        $site->domain = $domain;

        if($site->save()){
            $vhostsManager->addVirtualHost($domain);
        }
        else{
            $errors = $site->getErrors();
            $errorString = implode(",\n",$errors);
            echo $errorString;
        }

        echo "Job finished \n";
    }
}