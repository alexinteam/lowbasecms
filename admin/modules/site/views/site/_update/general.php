<?php


use dosamigos\tinymce\TinyMce;

/*
 * @var $this app\components\web\View
 * @var $model app\admin\modules\site\models\SiteForm
 */
?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'domain')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'theme')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
