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
        // get by site domain
        $host = $_SERVER['HTTP_HOST'];
        $siteByDomain = Site::find()->where(['domain' => $host])->one();

        if($siteByDomain){
            return ['sites/site/index', ['siteId' => $siteByDomain->id]];
        }

        // get by site name
        $pathInfo = $request->getPathInfo();
        $parts = explode('/',$pathInfo);

        if($parts[0] == 'sites' && isset($parts[1])){
            $siteName = $parts[1];
            $siteByName = Site::find()->where(['name' => $siteName])->one();

            if($siteByName){
                return ['sites/site/index', ['siteId' => $siteByName->id]];
            }
        }

        return false;
    }
}