<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<nav class="navbar navbar-inverse navbar-fixed-top bg-menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand name-brand" href="javascript:"><img src="<?= $this->getThemeUrl('images/logo.png'); ?>" class="logo-main" alt="Logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <div class="block-right pull-right">
                <p id="view-head-address" class="adress-rest">г.Санкт-Петербург, ул. Таллинская, д.85</p>
                <div class="block-right__div">
                    <p id="view-head-phone" class="phone-rest">+7 812 799-09-62</p>
                    <a href="javascript:" class="login" data-toggle="modal" data-target="#support">заказать звонок</a>
                </div>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>