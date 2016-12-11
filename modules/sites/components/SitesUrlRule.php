<?php

namespace app\modules\sites\components;

use app\models\entities\Site;
use yii\web\UrlRule;

class SitesUrlRule extends UrlRule
{
    public $connectionID = 'db';

    public function init()
    {
        if ($this->name === null) {
            $this->name = __CLASS__;
        }
    }

    public function parseRequest($manager, $request)
    {
        $host = $_SERVER['HTTP_HOST'];
        $site = Site::find()->where(['domain' => $host])->one();

        if($site){
            return ['sites/site/index', ['siteId' => $site->id]];
        }

        return false;
    }
}