<?php

$params = [
    'adminEmail' => 'restoweb@rambler.ru',
    //Action капчи в параметрах заполняется в случае если изменяются пути капчи
    //в конфигурации приложения и используются унаследованные модули или просто
    // модели и контроллеры от yii2-user.
    'captchaAction' => 'lowbase/user/captcha',
    'host' => 'staging.restoweb.psltd.org',
    'vkAppId' => '5898723',
    'vkSecret' => 'slz7D7MAoq75zlxFCgXT'
];


$localParamsConfig = __DIR__ . '/params_local.php';
if(file_exists($localParamsConfig)){
    $params = \yii\helpers\ArrayHelper::merge($params, require($localParamsConfig));
}

return $params;
