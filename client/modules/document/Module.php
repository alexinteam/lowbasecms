<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\document;

/**
 * Модуль документов
 * унаследованный от модуля \lowbase\document\Module
 * Class Module
 * @package app\admin\document\document
 */
class Module extends \lowbase\document\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'app\client\modules\document\controllers';

    /**
     * Инициализация
     */
    public function init()
    {
        parent::init();
    }
}
