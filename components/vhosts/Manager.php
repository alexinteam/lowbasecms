<?php

namespace app\components\vhosts;

use Yii;
use yii\base\Component;
use yii\base\View;

class Manager extends Component{

    public $baseName = 'lowbase_';

    public function addVirtualHost($domain){
        $documentRoot = Yii::getAlias('@app/web');
        $documentRoot = str_replace(['\\','/'],DIRECTORY_SEPARATOR,$documentRoot);

        $templatePath = __DIR__ . '/templates/vhost.php';

        $view = new View();
        $config = $view->renderFile($templatePath, array(
            'documentRoot' => $documentRoot,
            'serverName' => $domain
        ));

        $configPath = Yii::getAlias('@app/runtime/vhosts');
        $filePath = $configPath . '/' . $this->baseName . $domain . '.conf';
        file_put_contents($filePath,$config);
    }
}