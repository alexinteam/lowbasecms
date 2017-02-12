<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<div class="page1">
    <div class="w-main anim">
        <p id="view-banner-greeting" class="h2-title">
            <?= Html::encode($site->banner_greeting); ?>
        </p>
        <p id="view-banner-description" class="description-after">
            <?= Html::encode($site->banner_description); ?>
        </p>
        <a class="btn btn-default create-btn" data-toggle="modal" data-target="#reg">Забронировать</a>
    </div>
</div>