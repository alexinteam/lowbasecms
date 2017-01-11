<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@lowbase/user/mail',
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.rambler.ru',
        'username' => 'restoweb@rambler.ru',
        'password' => 'Restoweb13579',
        'port' => '465',
        'encryption' => 'ssl',
    ],
];
