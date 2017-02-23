<?php


use app\views\widgets\Editor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
//$form->action = yii\helpers\Url::to('update');
?>

<div class="row row-form">
    <div class="col-md-6">
        <?= $form->field($contactForm, 'email')
            ->textInput(['maxlength' => 255, 'class' => 'form-area', 'placeholder' => $contactForm->getAttributeLabel('email')])
            ->label(false); ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($contactForm, 'name')
            ->textInput(['maxlength' => 255, 'class' => 'form-area', 'placeholder' => $contactForm->getAttributeLabel('name')])
            ->label(false) ?>
    </div>
</div>

<?= $form->field($contactForm, 'message')
    ->textarea(['class' => 'form-area', 'rows' => 3, 'cols' => 40, 'placeholder' => $contactForm->getAttributeLabel('message')])
    ->label(false); ?>

<div class="form-group">
    <?= Html::submitButton('Отправить заявку', ['class' => 'send-post']) ?>
</div>


<?php ActiveForm::end(); ?>

<!--<form id="ajax-contact-form" action="">
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
</form>-->