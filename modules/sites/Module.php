<?php

namespace app\modules\sites;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\sites\controllers';

    public function init()
    {
        parent::init();

        /*$theme = "sb-admin";
        \Yii::$app->view->theme = new \yii\base\Theme([
            'basePath' => '@app/themes/' . $theme,
            'baseUrl' => '@web/themes/' . $theme,
            'pathMap' => [
                '@app/views' => '@app/themes/' . $theme,
            ],
        ]);*/
    }
}
