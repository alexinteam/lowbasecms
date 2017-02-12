<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<div class="banner-left page6">
    <div class="gradient-black">
        <div class="w-main">
            <div class="row">
                <div class="col-md-6 col-xs-6 col-md-offset-6 col-xs-offset-6">
                    <p id="view-call-header" class="name-rest">
                        <?= Html::encode($site->call_header); ?>
                    </p>
                    <p id="view-call-description" class="desription-rest">
                        <?= Html::encode($site->call_description); ?>
                    </p>
                    <a href="#" class="btn btn-default create-btn">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
</div>