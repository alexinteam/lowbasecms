<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

/* @var $this yii\web\View */

use yii\helpers\Html;
use lowbase\user\components\AuthChoice;
use yii\widgets\ActiveForm;
use app\client\assets\LoginAsset;

$this->title = 'Вход в клиентскую часть';
$this->params['breadcrumbs'][] = $this->title;
LoginAsset::register($this);
?>

<div class="site-login row" id="filter">

    <?= $this->render('_pass', ['model' => $forget]); ?>

    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
        <p style="margin: 50px 0px 30px 0px;"></p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{input}\n{hint}\n{error}"
            ],
            'options' => [
                'class' => 'form-signin'
            ]
        ]); ?>

        <h2 class="form-signin-heading">Войти в кабинет</h2>

        <?= $form->field($model, 'email')->textInput([
            'maxlength' => true,
            'placeholder' => $model->getAttributeLabel('email')
        ]); ?>

        <?= $form->field($model, 'password')->passwordInput([
            'maxlength' => true,
            'placeholder' => $model->getAttributeLabel('password')
        ]);?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <p class="hint-block">
            Если <?=Html::a('регистрировались', ['/?signup=signup'])?>
            ранее, но забыли пароль, нажмите
            <?=Html::a('восстановить пароль', ['#'], [
                'data-toggle' => 'modal',
                'data-target' => '#pass',
            ])?>.
        </p>

        <div class="form-group">
            <?= Html::submitButton('<i class="glyphicon glyphicon-log-in"></i> Войти в кабинет', [
                'class' => 'btn btn-lg btn-primary',
                'id' => 'login-btn',
                'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <div class="col-lg-3">
    </div>
</div>
