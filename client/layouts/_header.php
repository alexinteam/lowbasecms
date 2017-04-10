<?php
use app\models\Messages;
use \yii\widgets\Menu;
use app\models\User as UserModel;
$me = Yii::$app->user->identity;
$featuredRestoraunt = UserModel::getFeaturedRestoraunt();
$otherRestoraunts = UserModel::getOtherRestoraunt();


$messages = Messages::getLatestUnreadMessages($me->getId());

$siteConfigActivate = false;
if($this->context->route == 'client-site/site/index' || $this->context->route == 'client-site/site/create') {
    $siteConfigActivate = true;
}

$siteNewsActivate = false;
if($this->context->route == 'client-news/news/create' || $this->context->route == 'client-news/news/archive' || $this->context->route == 'client-news/news/add' || $this->context->route == 'client-news/news/edit') {
    $siteNewsActivate = true;
}

$siteBookingsActivate = false;
if($this->context->route == 'client-bookings/bookings/index' || $this->context->route == 'client-bookings/bookings/archive') {
    $siteBookingsActivate = true;
}

$siteRewiewsActivate = false;
if($this->context->route == 'client-rewiews/rewiews/order' || $this->context->route == 'client-rewiews/rewiews/other' || $this->context->route == 'client-rewiews/rewiews/site') {
    $siteRewiewsActivate = true;
}

$siteSocialActivate = false;
if($this->context->route == 'client-social/social/vk' || $this->context->route == 'client-social/social/instagram' || $this->context->route == 'client-social/social/facebook') {
    $siteSocialActivate = true;
}

?>

<header>
    <div class="w-main">
        <div class="row menu-up">
            <div class="col-md-4 col-xs-4 left">
                <ul class="nav-panel nav-header">
                    <li><a href="/site/tarif">Тарифы</a></li>
                    <li class="active"><a href="">Дополнительно</a></li>
                    <li><a href="">Связь с нами</a></li>
                    <li><a href="/logout">Выйти</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-4">
                <div class="btn-group">
                    <p class="select-text">Выберите Ваш ресторан:</p>
                    <button id="featuredRestoraunt" type="button" class="dropdown-toggle restaurant-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $featuredRestoraunt->lb_restoraunts_name?>
                    </button>
                        <?php
                            if(count($otherRestoraunts)){
                                echo '<ul class="dropdown-menu dropdown-menu-restaurant">';
                                foreach ($otherRestoraunts as $otherRestoraunt) {
                                    echo '<li restoraunt_id="'.$otherRestoraunt->lb_restoraunts_id.'"><a class="change_restoraut" onclick="changeRestoraut(this)" href="#">'.$otherRestoraunt->lb_restoraunts_name.'</a></li>';
                                }
                                echo '</ul>';
                            }
                        ?>
                </div>

            </div>
            <div class="col-md-4 col-xs-4 right">
                <div class="panel-user">
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li>
                            <a href="/client-user/user/list-messages">
                                <div class="icon-email"></div>
                                <?php if(count($messages)) {
                                    echo '<div class="push-email">'.count($messages).'</div>';
                                }?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon-notices"></div>
                                <div class="push-notices">2</div>
                            </a>
                        </li>
                        <li>
                            <div class="thumbnail-middle"><a href="#"><img src="/css/clients/images/Tom.jpg" alt=""></a></div>
                            <p class="name-user"><?=$me->first_name?></p>
                        </li>
                    </ul>
                    <div class="mail-block">

                    </div>
                    <div class="notice-block">
                    </div>

                </div>
            </div>
        </div>
        <img class="logo-cabinet" src="/css/clients/images/logo-header.svg" alt="">
        <?=Menu::widget([
            'options' => ['class' => 'nav-panel nav-cabinet'],
            'items' => [
                ['label' => 'Dashboard', 'url' => ['/client'], 'active' => $this->context->route == 'client/index'],
                ['label' => 'Новости и События', 'url' => ['/client-news/news/create'], 'active' => $this->context->route == $siteNewsActivate],
                ['label' => 'Отзывы','url' => ['/client-rewiews/rewiews/other'], 'active' => $this->context->route == $siteRewiewsActivate],
                ['label' => 'Бронирование столов', 'url' => ['/client-bookings/bookings/index'], 'active' => $this->context->route == $siteBookingsActivate],
                ['label' => 'Управление сайтом', 'url' => ['/client/site/index'], 'active' => $siteConfigActivate],
//                ['label' => 'Дизайн', 'url' => ['/client']],
                ['label' => 'Социальные сети', 'url' => ['/client-social/social/vk'], 'active' => $this->context->route == $siteSocialActivate],
//                ['label' => 'Статистика','url' => ['/client']],
                ['label' => 'Сообщения', 'url' => ['/client-user/user/list-messages'], 'active' => $this->context->route == 'client-user/user/list-messages'],
            ]]);
        ?>
    </div>
    <div class="nav-sub">
        <div class="w-main">
            <?php
                //submenus
                if($this->context->route == 'client-reviews/reviews/list-reviews') {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Другие отзывы', 'url' => ['#']],
                            ['label' => 'Отзывы на сайте', 'url' => ['#']],
                            ['label' => 'Заказать отзывы','url' => ['#']]
                        ]]);
                }
                if($siteConfigActivate) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Создать сайт', 'url' => ['/client-site/site/create'], 'active' => $this->context->route == 'client-site/site/create'],
                            ['label' => 'Настройки', 'url' => ['/client-site/site/index'], 'active' => $this->context->route == 'client-site/site/index']
                        ]]);
                }
                if($siteNewsActivate) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            [
                                'label' => 'Добавить новость',
                                'url' => ['/client-news/news/create'],
                                'active' => $this->context->route == 'client-news/news/create' || $this->context->route == 'client-news/news/add' || $this->context->route == 'client-news/news/edit'
                            ],
                            ['label' => 'Архив новостей', 'url' => ['/client-news/news/archive'], 'active' => $this->context->route == 'client-news/news/archive']
                        ]]);
                }
                if($siteBookingsActivate) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Активные брони', 'url' => ['/client-bookings/bookings/index'], 'active' => $this->context->route == 'client-bookings/bookings/index'],
                            ['label' => 'Архив бронирований', 'url' => ['/client-bookings/bookings/archive'], 'active' => $this->context->route == 'client-bookings/bookings/archive']
                        ]]);
                }
                if($siteRewiewsActivate) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Активные брони', 'url' => ['/client-rewiews/rewiews/other'], 'active' => $this->context->route == 'client-rewiews/rewiews/other'],
                            ['label' => 'Архив бронирований', 'url' => ['/client-rewiews/rewiews/site'], 'active' => $this->context->route == 'client-rewiews/rewiews/site'],
                            ['label' => 'Заказать отзывы', 'url' => ['/client-rewiews/rewiews/order'], 'active' => $this->context->route == 'client-rewiews/rewiews/order']
                        ]]);
                }

                if($siteSocialActivate) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Вконтакте', 'url' => ['/client-social/social/vk'], 'active' => $this->context->route == 'client-social/social/vk'],
                            ['label' => 'Facebook', 'url' => ['/client-social/social/instagram'], 'active' => $this->context->route == 'client-social/social/instagram'],
                            ['label' => 'Instagram', 'url' => ['/client-social/social/facebook'], 'active' => $this->context->route == 'client-social/social/facebook']
                        ]]);
                }

            ?>
<!--            <a href="javascript:" class="pluso">+</a>-->
        </div>
    </div>
</header>