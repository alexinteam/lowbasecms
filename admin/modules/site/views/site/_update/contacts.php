<?php
/**
 * Created by PhpStorm.
 * User: antonshell
 * Date: 26.12.2016
 * Time: 15:23
 */
?>

<?= $form->field($model, 'about_us')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>