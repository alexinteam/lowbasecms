<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

use dmstr\widgets\Menu;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Рабочий стол', 'icon' => 'icon-home', 'url' => ['/admin/index']],
//                    ['label' => 'Сайты', 'icon' => 'fa fa-globe', 'url' => ['/admin/site/index']],
//                    ['label' => 'Документы', 'icon' => 'glyphicon glyphicon-file', 'url' => ['/admin-document/document/index']],
//                    ['label' => 'Шаблоны', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/admin-document/template/index']],
                    ['label' => 'Пользователи', 'icon' => 'glyphicon glyphicon-user', 'url' => ['/admin-user/user/index']],
                    ['label' => 'Роли и права', 'icon' => 'glyphicon glyphicon-eye-close', 'url' => ['/admin-user/auth-item/index']],
//                    ['label' => 'Правила допусков', 'icon' => 'glyphicon glyphicon-lock', 'url' => ['/admin-user/auth-rule/index']],
                    ['label' => 'Настройки Сайта', 'icon' => 'glyphicon glyphicon-wrench', 'url' => ['/admin-config/config/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
