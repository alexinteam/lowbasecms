<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\admin\assets;

use yii\web\AssetBundle;

/**
 * Подключение JS и Css
 * Class AppAsset
 * @package app\assets
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/admins/admin.css'
    ];
    public $js = [

    ];
    public $depends = [

    ];
}
