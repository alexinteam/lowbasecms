<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'lowbase',
    'name' => 'RESTOWEB',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'ISfNWi2OD58V6WoC8fYVx0q28RaiilRr',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        //-----------------------
        // Компонент пользователя
        //-----------------------
        'user' => [
            'identityClass' => 'lowbase\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
            'on afterLogin' => function($event) {
                lowbase\user\models\User::afterLogin($event->identity->id);
            }
        ],
        //--------------------------------------------------------
        // Компонент OAUTH для авторизации через социальные сети,
        // где вмето ? указываем полученные после регистрации
        // клиентский ID и секретный ключ.
        // В комментария указаны ссылки для регистрации приложений
        // в соответствующих социальных сетях.
        //--------------------------------------------------------
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
//                'vkontakte' => [
//                    // https://vk.com/editapp?act=create
//                    'class' => 'lowbase\user\components\oauth\VKontakte',
//                    'clientId' => '?',
//                    'clientSecret' => '?',
//                    'scope' => 'email'
//                ],
//                'google' => [
//                    // https://console.developers.google.com/project
//                    'class' => 'lowbase\user\components\oauth\Google',
//                    'clientId' => '?',
//                    'clientSecret' => '?',
//                ],
//                'twitter' => [
//                    // https://dev.twitter.com/apps/new
//                    'class' => 'lowbase\user\components\oauth\Twitter',
//                    'consumerKey' => '?',
//                    'consumerSecret' => '?',
//                ],
//                'facebook' => [
//                    // https://developers.facebook.com/apps
//                    'class' => 'lowbase\user\components\oauth\Facebook',
//                    'clientId' => '?',
//                    'clientSecret' => '?',
//                ],
//                'github' => [
//                    // https://github.com/settings/applications/new
//                    'class' => 'lowbase\user\components\oauth\GitHub',
//                    'clientId' => '?',
//                    'clientSecret' => '?',
//                    'scope' => 'user:email, user'
//                ],
//                'yandex' => [
//                    // https://oauth.yandex.ru/client/new
//                    'class' => 'lowbase\user\components\oauth\Yandex',
//                    'clientId' => '?',
//                    'clientSecret' => '?',
//                ],
            ],
        ],
        //---------------------------------------------
        // Для реализации разделения прав пользователей
        // с помощью коробочного модуля Yii2 RBAC.
        //---------------------------------------------
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'lb_auth_item',
            'itemChildTable' => 'lb_auth_item_child',
            'assignmentTable' => 'lb_auth_assignment',
            'ruleTable' => 'lb_auth_rule'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'mailer' => require(__DIR__ . '/mailer.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            'enableStrictParsing' => false,
            'rules' => [

                // sites
                ['class' => 'app\modules\sites\components\SitesUrlRule', 'connectionID' => 'db'],


                //СЛУЖЕБНЫЕ ФУНКЦИИ ДЛЯ КЛИЕНТСКОЙ И АДМИНИСТРАТИВНОЙ ЧАСТИ САЙТА
                //Авторизация через социальные сети
                'auth/<authclient:[\w\-]+>' => 'lowbase-user/auth/index',
                'captcha' => 'lowbase-user/default/captcha',
                //Поиск населенного пункта (города)
                //Поиск населенного пункта (города)
                'city/find' => 'lowbase-user/city/find',

                // Clients
                'client' => 'client/index',
                //Взаимодействия с пользователем в панели админстрирования
                'client/user/<action:(index|update|delete|view|rmv|multidelete|multiactive|multiblock)>' => 'client-user/user/<action>',
                //Взаимодействия со странами в панели админстрирования
                'client/country/<action:(index|create|update|delete|view|multidelete)>' => 'client-user/country/<action>',
                //Взаимодействия с городами в панели администрирования
                'client/city/<action:(index|create|update|delete|view|multidelete)>' => 'client-user/city/<action>',
                //client с ролями и разделением прав доступа
                'client/role/<action:(index|create|update|delete|view|multidelete)>' => 'client-user/auth-item/<action>',
                //Работа с правилами контроля доступа
                'client/rule/<action:(index|create|update|delete|view|multidelete)>' => 'client-user/auth-rule/<action>',
                //Взаимодействия с шаблонами в панели администрирования
                'client/template/<action:(index|create|update|delete|view|multidelete)>' => 'client-document/template/<action>',
                //Взаимодействия с документами в панели администрирования !!! Правила для документов лучше не менять, т.к. на них завязан js скрипт компонента дерево документов
                'admin/document/<action:(index|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field)>' => 'client-document/document/<action>',
                //Взаимодействия с файловым менеджеромч
                'elfinder/<action(connect|manager)>' => 'client-document/path/<action>',
                //Взаимодействия с дополнительными полями шаблонов
                'client/field/<action:(create|update|delete|multidelete)>' => 'client-document/field/<action>',
                // sites configuration
                'client/site/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field)>' => 'client-site/site/<action>',
                // events
                'client/events/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field|archive)>' => 'client-events/events/<action>',
                // news
                'client/news/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field|archive|add)>' => 'client-news/news/<action>',
                // bookings
                'client/bookings/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field|archive)>' => 'client-bookings/bookings/<action>',
                // rewiews
                'client/rewiews/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field|order|other|site)>' => 'client-rewiews/rewiews/<action>',
                // social
                'client/social/<action:(vk|facebook|instagram)>' => 'client-social/social/<action>',



                //АДМИНИСТРАТИВНАЯ ЧАСТЬ САЙТА
                'admin' => 'admin/index',
                //Взаимодействия с пользователем в панели админстрирования
                'admin/user/<action:(index|update|delete|view|rmv|multidelete|multiactive|multiblock)>' => 'admin-user/user/<action>',
                //Взаимодействия со странами в панели админстрирования
                'admin/country/<action:(index|create|update|delete|view|multidelete)>' => 'admin-user/country/<action>',
                //Взаимодействия с городами в панели администрирования
                'admin/city/<action:(index|create|update|delete|view|multidelete)>' => 'admin-user/city/<action>',
                //Работа с ролями и разделением прав доступа
                'admin/role/<action:(index|create|update|delete|view|multidelete)>' => 'admin-user/auth-item/<action>',
                //Работа с правилами контроля доступа
                'admin/rule/<action:(index|create|update|delete|view|multidelete)>' => 'admin-user/auth-rule/<action>',
                //Взаимодействия с шаблонами в панели администрирования
                'admin/template/<action:(index|create|update|delete|view|multidelete)>' => 'admin-document/template/<action>',
                //Взаимодействия с документами в панели администрирования !!! Правила для документов лучше не менять, т.к. на них завязан js скрипт компонента дерево документов
                'admin/document/<action:(index|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field)>' => 'admin-document/document/<action>',
                //Взаимодействия с файловым менеджеромч
                'elfinder/<action(connect|manager)>' => 'admin-document/path/<action>',
                //Взаимодействия с дополнительными полями шаблонов
                'admin/field/<action:(create|update|delete|multidelete)>' => 'admin-document/field/<action>',

                // sites configuration
                'admin/site/<action:(index|edit|create|update|delete|view|multidelete|multiactive|multiblock|move|change|field)>' => 'admin-site/site/<action>',

                //КЛИЕНТСКАЯ ЧАСТЬ САЙТА
                //Взаимодействия с пользователем на сайте
                '<action:(login|logout|signup|confirm|reset|profile|remove|online)>' => 'user/<action>',
                //Просмотр пользователя
                'user/<id:\d+>' => 'user/show',
                // Лайк документа
                'like/<id:\d+>' => 'document/like',
                //Отображение документов
                '<alias>' => 'document/show',
                //Стартовая страница сайта
                '/' => 'site/index',

                // Sites

            ],
        ],
        'view' => [
            'class' => 'app\components\web\View',
            'siteTheme' => 'restoweb_dark',
            'theme' => [
                'basePath' => '@app/themes/restoweb_dark',
                'baseUrl' => '@web/themes/restoweb_dark',
                'pathMap' => [
                    '@app/views' => '@app/themes/restoweb_dark',
                ],
            ],
            /*'theme' => [
                'basePath' => '@app/themes/restoweb',
                'baseUrl' => '@web/themes/restoweb',
                'pathMap' => [
                    '@app/views' => '@app/themes/restoweb',
                ],
            ],*/
        ],
        'assetManager' => [
            'bundles' => [
                'app\assets\AppDarkAsset',
                // you can override AssetBundle configs here
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@vendor/lowbase',
                    'forceTranslation' => true,
                    'fileMap' => [
                        'document' => 'document/messages/document.php',
                        'user' => 'document/messages/user.php'
                    ]
                ],
            ],
        ],
        'vhostsManager' => [
            'class' => 'app\components\vhosts\Manager',
        ],
    ],
    'controllerMap' => [
        'admin' => [
            'class' => 'app\admin\controllers\AdminController',
        ],
        'client' => [
            'class' => 'app\client\controllers\ClientController',
        ],
    ],
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'lowbase-user' => [
            'class' => '\lowbase\user\Module',
        ],
        'lowbase-document' => [
            'class' => '\lowbase\document\Module',
        ],
        'admin-user' => [
            'class' => 'app\admin\modules\user\Module',
        ],
        'admin-document' => [
            'class' => 'app\admin\modules\document\Module',
        ],
        'admin-config' => [
            'class' => 'app\admin\modules\config\Module',
        ],
        'admin-site' => [
            'class' => 'app\admin\modules\site\Module',
        ],

        'client-user' => [
            'class' => 'app\client\modules\user\Module',
        ],
        'client-document' => [
            'class' => 'app\client\modules\document\Module',
        ],
        'client-config' => [
            'class' => 'app\client\modules\config\Module',
        ],
        'client-site' => [
            'class' => 'app\client\modules\site\Module',
        ],
        'client-events' => [
            'class' => 'app\client\modules\events\Module',
        ],
        'client-news' => [
            'class' => 'app\client\modules\news\Module',
        ],
        'client-bookings' => [
            'class' => 'app\client\modules\bookings\Module',
        ],
        'client-rewiews' => [
            'class' => 'app\client\modules\rewiews\Module',
        ],
        'client-social' => [
            'class' => 'app\client\modules\social\Module',
        ],


        'sites' => [
            'class' => 'app\modules\sites\Module',
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
    ];
}

$localWebConfig = __DIR__ . '/web_local.php';
if(file_exists($localWebConfig)){
    $config = \yii\helpers\ArrayHelper::merge($config, require($localWebConfig));
}

return $config;
