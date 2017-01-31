<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package app\assets
 */
class AppDarkAsset extends AssetBundle
{
    public $baseUrl = '@web/assets';

    public function init()
    {
        $this->sourcePath = '@app/themes/restoweb_dark/assets';
        parent::init();
    }

    public $css = [
        'css/bootstrap.min.css',
        'css/main.css',
        'css/bg-menu.css',
        'css/index.css',
        'css/animate.css',
        'css/tarif.css'
    ];
    public $js = [
        //'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/viewportchecker.js',
        'js/jquery-form.min.js',
        'js/scripts.js',
        'js/signupForm.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}