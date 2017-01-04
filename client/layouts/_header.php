<?php
use app\models\Messages;

$me = Yii::$app->user->identity;
$messages = Messages::getLatestUnreadMessages($me->getId());
?>

<header>
    <div class="w-main">
        <div class="row menu-up">
            <div class="col-md-4 col-xs-4 left">
                <ul class="nav-panel nav-header">
                    <li><a href="">Тарифы</a></li>
                    <li class="active"><a href="">Дополнительно</a></li>
                    <li><a href="">Связь с нами</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-4">
                <p class="select-text">Выберите Ваш ресторан: <a href="" class="restaurant-name">Parmezan</a></p>
            </div>
            <div class="col-md-4 col-xs-4 right">
                <div class="panel-user">
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li>
                            <a href="#">
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
        <ul class="nav-panel nav-cabinet">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="news.html">Новости</a></li>
            <li class="active"><a href="rewiew-1.html">Отзывы</a></li>
            <li><a href="reserve.html">Бронирование столов</a></li>
            <li><a href="/client/site/index">Управление сайтом</a></li>
            <li><a href="design.html">Дизайн</a></li>
            <li><a href="social.html">Социальные сети</a></li>
            <li><a href="event.html">События</a></li>
            <li><a href="statistic.html">Статистика</a></li>
        </ul>
    </div>
    <div class="nav-sub">
        <div class="w-main">
            <ul class="nav-panel nav-cabinet">
                <li><a href="rewiew-1.html">Другие отзывы</a></li>
                <li><a href="rewiew-2.html">Отзывы на сайте</a></li>
                <li class="active"><a href="rewiew-3.html">Заказать отзывы</a></li>
            </ul>
            <a href="javascript:" class="pluso">+</a>
        </div>

    </div>
</header>