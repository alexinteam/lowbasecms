<?php
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;
use app\models\entities\Site;

?>

<H1>Создание сайта</H1>
<?php
    $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    ]) ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'domain') ?>
<?= $form->field($model, 'theme')->dropDownList(Site::getThemesForSelect(),[
        'prompt' => 'Выберите тему...'
    ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>