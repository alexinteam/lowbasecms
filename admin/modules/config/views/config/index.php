<?php
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;
use app\views\widgets\Editor;


?>
<?php
    if(isset($saved) && $saved) {
        echo '<h1>Site Config Saved!</h1>';
    }
?>


<?php $form = ActiveForm::begin();
    $form->action = yii\helpers\Url::to('update');
?>

<?= $form->field($model, 'site_name') ?>
<?= $form->field($model, 'phone') ?>
<?= $form->field($model, 'address')->widget(Editor::className());?>
<?= $form->field($model, 'contact_email') ?>



<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>


<?php ActiveForm::end(); ?>
