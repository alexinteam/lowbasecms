<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<h1>Здравствуйте, <?=Yii::$app->user->identity->first_name?>.</h1>
<p>Здесь будут настройки сайта.</p>
<p>Адрес страницы: <b>/admin-config/config/index</b></p>