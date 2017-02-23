<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\themes\sites\aqua;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $baseUrl = '@web/assets';

    public function init()
    {
        $this->sourcePath =  __DIR__ . '/assets';
        parent::init();
    }

    public $css = [
        //'vendor/bootstrap/css/bootstrap.min.css',
        /*'vendor/font-awesome/css/font-awesome.min.css',
        'css/agency.min.css',*/

        "css/bootstrap.min.css",


        /*"css/main.css",
        "css/bg-menu.css",*/


        /*"css/editor-main.css",
        "css/editor-bg-menu.css",
        "css/editor-index.css",*/

        //"vendors/uploadifive/uploadifive.css",

        "css/index.css",
        "css/animate.css",
        "css/slick.css",
        "css/slick-theme.css",

        //"css/editor-website.css"
    ];
    public $js = [
        //'vendor/jquery/jquery.min.js',
        //'vendor/bootstrap/js/bootstrap.min.js',
        /*'js/jqBootstrapValidation.js',
        'js/contact_me.js',
        'js/agency.min.js',*/

        //"js/jquery.min.js",
        //"vendors/uploadifive/jquery.uploadifive.min.js",

        "js/bootstrap.min.js",
        "js/viewportchecker.js",
        "js/slick.min.js",
        "js/slider.js",
        "js/custom.js"
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
