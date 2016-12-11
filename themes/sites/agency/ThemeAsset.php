<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\themes\sites\agency;

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
        'css/agency.min.css',
    ];
    public $js = [
        //'vendor/jquery/jquery.min.js',
        //'vendor/bootstrap/js/bootstrap.min.js',
        'js/jqBootstrapValidation.js',
        'js/contact_me.js',
        'js/agency.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
