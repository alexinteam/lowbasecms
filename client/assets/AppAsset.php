<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\assets;

use yii\web\AssetBundle;

/**
 * Подключение JS и Css
 * Class AppAsset
 * @package app\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/clients/bootstrap.min.css',
        '/css/clients/main.css',
        '/css/clients/bg-menu.css',
        '/css/clients/cabinet.css'
    ];
    public $js = [
        //'/js/jquery.min.js',
        '/js/bootstrap.min.js',
        '/js/viewportchecker.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
