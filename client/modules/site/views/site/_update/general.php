<?php
use app\models\entities\Site;
use dosamigos\tinymce\TinyMce;

/*
 * @var $this app\components\web\View
 * @var $model app\models\entities\Site
 */
?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'domain')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'theme')->dropDownList(Site::getThemesForSelect()); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ga_account')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
