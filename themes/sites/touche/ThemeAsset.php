<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\themes\sites\touche;

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
        'plugins/font-awesome/css/font-awesome.min.css',
        'plugins/lightbox/css/lightbox.css',
        'css/styles.css'
    ];
    public $js = [
        'jquery/jquery.min.js',
        'bootstrap/js/bootstrap.min.js',

        'plugins/smoothscroll/smoothscroll.min.js',
        'plugins/imagesloaded/imagesloaded.pkgd.min.js',
        'assets/plugins/isotope/isotope.pkgd.min.js',
        'plugins/lightbox/js/lightbox.min.js',
    ];

    public $depends = [
        //'yii\web\JqueryAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}