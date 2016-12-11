<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\themes\sites\creative;

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
        'vendor/font-awesome/css/font-awesome.min.css',
        'vendor/magnific-popup/magnific-popup.css',
        'css/creative.min.css',
    ];
    public $js = [
        //'vendor/jquery/jquery.min.js',
        //'vendor/bootstrap/js/bootstrap.min.js',
        'vendor/scrollreveal/scrollreveal.min.js',
        'vendor/magnific-popup/jquery.magnific-popup.min.js',
        'js/creative.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
