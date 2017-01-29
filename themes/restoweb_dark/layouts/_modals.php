<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use lowbase\user\components\AuthChoice;
use yii\captcha\Captcha;
use yii\widgets\ActiveForm;
use lowbase\user\UserAsset;
use app\models\SignupForm;

$this->title = Yii::t('user', 'Регистрация');
$this->params['breadcrumbs'][] = $this->title;

$model = new SignupForm();
?>

<!-- Modal -->
<div class="modal fade" id="reg" role="dialog">
    <div class="modal-center">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Регистрация</h4>
                </div>

                <?php $form = ActiveForm::begin([
                    'id' => 'form-signup',
                    'action' => ['user/signup'],
                    'fieldConfig' => [
                        'template' => "{input}\n{hint}\n{error}"
                    ]
                ]); ?>

                <div class="modal-body">
                    <div class="content-input">
                        <div class="form-group field-signupform-first_name required">
                            <?= Html::textInput("inn", '', [
                                'maxlength' => 45,
                                'class' => 'form-input',
                                'type' => 'text',
                                'placeholder' => 'Введите ИНН Вашей организации'
                            ]) ?>
                        </div>

                        <div class="form-group field-signupform-first_name required">
                            <?= Html::textInput("organization", '', [
                                'maxlength' => 255,
                                'class' => 'form-input',
                                'type' => 'text',
                                'placeholder' => 'Введите название Вашей организации'
                            ]) ?>
                        </div>

                        <?= $form->field($model, 'first_name')->textInput([
                            'class' => 'form-input',
                            'maxlength' => true,
                            'placeholder' => $model->getAttributeLabel('first_name')
                        ]);?>

                        <?= $form->field($model, 'last_name')->textInput([
                            'class' => 'form-input',
                            'maxlength' => true,
                            'placeholder' => $model->getAttributeLabel('last_name')
                        ]);?>

                        <?= $form->field($model, 'email')->textInput([
                            'class' => 'form-input',
                            'maxlength' => true,
                            'placeholder' => 'Введите почту компании'
                        ]);?>

                        <?= $form->field($model, 'password')->passwordInput([
                            'class' => 'form-input',
                            'maxlength' => true,
                            'placeholder' => $model->getAttributeLabel('password')
                        ]); ?>

                        <?= $form->field($model, 'phone')->textInput([
                            'class' => 'form-input',
                            'placeholder' => 'Введите контактный телефон организации'
                        ]);?>

                        <div class="form-group field-signupform-first_name required">
                            <?= Html::textInput("addtional_contact", '', [
                                'maxlength' => 255,
                                'class' => 'form-input',
                                'type' => 'text',
                                'placeholder' => 'Введите дополнительные контакты'
                            ]) ?>
                        </div>

                        <div class="modal-footer">
                            <?= Html::submitButton(Yii::t('user', 'Зарегистрироваться'), [
                                'class' => 'input-submit',
                                'name' => 'signup-button']) ?>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
                <div class="col-lg-6">
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="support" role="dialog">
    <div class="modal-center">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Связаться с нами</h4>
                </div>
                <div class="modal-body">
                    <div class="content-input">
                        <p><input class="form-input" type="tel" placeholder="Введите Ваш телефон"></p>
                        <p><input class="form-input" type="mail" placeholder="Введите Вашу почту"></p>
                        <div class="select-style">
                            <select class="form-control select-block">
                                <option disabled="" selected="">Категория вопроса</option>
                                <option value="1">Установка сайта</option>
                                <option value="2">Наполнение контентом</option>
                                <option value="3">Создание учетной записи</option>
                                <option value="4">Удаление учетной записи</option>
                            </select>
                        </div>
                        <p><textarea class="form-input" placeholder="Опишите суть вопроса" rows="4"></textarea></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p><input class="input-submit" type="submit" value="Отправить"></p>
                    <a href="javascript:" class="confidence"><span>Политика конфедициальности сайта</span></a>
                </div>
            </div>

        </div>
    </div>
</div>