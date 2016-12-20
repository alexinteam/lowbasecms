<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

use app\admin\widgets\Menu;
?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  sidebar-search-down" action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="sidebar-restaurant">
                <div class="dropdown dropdown-restaurant">
                    <button class="btn dropdown-toggle point-dropdown" type="button" data-toggle="dropdown">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ресторан Прага</a></li>
                        <li><a href="#">Бар ДК</a></li>
                        <li><a href="#">Ресторан Высота</a></li>
                        <li><a href="#">Ресторан Unique</a></li>
                    </ul>
                </div>
                <p class="name-restaurant">Ресторан Прага</p>

                <a class="enter-to-restaurant" href="javascript:"><span>зайти на сайт</span><i class="icon-social-dribbble"></i></a>

            </li>

            <?= Menu::widget(
                [
                    'options' => [
                        'class' => 'page-sidebar-menu  page-header-fixed ',
                        'data-keep-expanded' => 'false',
                        'data-auto-scroll' => 'true',
                        'data-slide-speed' => '200'
                    ],
                    'items' => [
                        ['label' => 'Рабочий стол', 'icon' => 'icon-home', 'url' => ['/admin/index']],
                        ['label' => 'Документы', 'icon' => 'glyphicon glyphicon-file', 'url' => ['/admin-document/document/index']],
                        ['label' => 'Шаблоны', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/admin-document/template/index']],
                        ['label' => 'Пользователи', 'icon' => 'glyphicon glyphicon-user', 'url' => ['/admin-user/user/index']],
                        ['label' => 'Роли и права', 'icon' => 'glyphicon glyphicon-eye-close', 'url' => ['/admin-user/auth-item/index']],
                        ['label' => 'Правила допусков', 'icon' => 'glyphicon glyphicon-lock', 'url' => ['/admin-user/auth-rule/index']],
                        ['label' => 'Reservation', 'icon' => 'icon-diamond', 'url' => ['#']],
                        ['label' => 'Editor', 'icon' => 'icon-puzzle', 'url' => ['#']],
                        ['label' => 'Reviews', 'icon' => 'icon-bar-chart', 'url' => ['#']],
                        ['label' => 'Events', 'icon' => 'icon-bulb', 'url' => ['#']],
                        ['label' => 'Ads', 'icon' => 'icon-briefcase', 'url' => ['#']],
                        ['label' => 'Сообщения', 'icon' => 'glyphicon glyphicon-envelope', 'url' => ['/admin-user/user/list-messages']],
                    ],
                ]
            ) ?>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
