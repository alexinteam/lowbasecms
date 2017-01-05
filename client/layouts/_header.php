<?php
use app\models\Messages;
use \yii\widgets\Menu;
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
        <?=Menu::widget([
            'options' => ['class' => 'nav-panel nav-cabinet'],
            'items' => [
                ['label' => 'Dashboard', 'url' => ['/client'], 'active' => $this->context->route == 'client/index'],
                ['label' => 'Новости', 'url' => ['/client']],
                ['label' => 'Отзывы','url' => ['/client']],
                ['label' => 'Бронирование столов', 'url' => ['/client']],
                ['label' => 'Управление сайтом', 'url' => ['/client/site/index'], 'active' => $this->context->route == ('client-site/site/index' || 'client-site/site/create')],
                ['label' => 'Дизайн', 'url' => ['/client']],
                ['label' => 'Социальные сети', 'url' => ['/client']],
                ['label' => 'События', 'url' => ['/client']],
                ['label' => 'Статистика','url' => ['/client']],
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
                if($this->context->route == ('client-site/site/index' || 'client-site/site/create')) {
                    echo Menu::widget([
                        'options' => ['class' => 'nav-panel nav-cabinet'],
                        'items' => [
                            ['label' => 'Создать сайт', 'url' => ['site/create'], 'active' => $this->context->route == 'client-site/site/create'],
                            ['label' => 'Настройки', 'url' => ['site/index'], 'active' => $this->context->route == 'client-site/site/index']
                        ]]);
                }
            ?>
            <a href="javascript:" class="pluso">+</a>
        </div>
    </div>
</header>