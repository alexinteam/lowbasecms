<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<div class="w-main">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $this->getThemeUrl('images/map.png'); ?>" alt="map">
        </div>
        <div class="col-md-6 left">
            <div class="row row-footer-info">
                <div class="col-md-6">
                    <h3 class="f-25">Адрес:</h3>
                    <p id="view-footer-address" class="info-p">
                        <?= Html::encode($site->site_address); ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="f-25">Телефон:</h3>
                    <p class="info-p" id="view-footer-phone">
                        <?= Html::encode($site->site_phone); ?>
                    </p>
                    <!--<p class="info-p">+7 495 789-98-56</p>-->
                </div>
            </div>
            <h4 class="f-20 form-h4">Форма обратной связи:</h4>
            <form id="ajax-contact-form" action="">
                <div class="row row-form">
                    <div class="col-md-6">
                        <input class="form-area" type="email" name="email" value="" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <input class="form-area" type="text" text="" name="name" value="" placeholder="Имя">
                    </div>
                </div>
                <textarea class="form-area" name="message" cols="40" rows="3" placeholder="Текст сообщения"></textarea>
                <input type="submit" name="submit" class="send-post" value="Отправить заявку">
            </form>
        </div>
    </div>
</div>