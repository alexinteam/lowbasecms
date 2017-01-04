<?php
/*
 * @var $this app\components\web\View
 * @var $form app\admin\modules\site\models\SiteForm
 * @var $site Site
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>

<ul class="nav nav-tabs">
    <li class="active">
        <a data-toggle="tab" href="#general">
            General info
        </a>
    </li>
    <!--<li>
        <a data-toggle="tab" href="#blocks">
            Blocks
        </a>
    </li>-->
    <li>
        <a data-toggle="tab" href="#contacts">
            Contacts
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#settings">
            Settings
        </a>
    </li>
</ul>

<div class="tab-content">
    <div id="general" class="tab-pane fade in active">
        <h3>General Info</h3>

        <?= $this->render('_update/general', [
            'model' => $model,
            'form' => $form,
        ]) ?>

    </div>
    <!--<div id="blocks" class="tab-pane fade in">
        <h3>Blocks</h3>

        <?/*= $this->render('_update/blocks', [
            'model' => $model,
            'form' => $form,
        ]) */?>

    </div>-->
    <div id="contacts" class="tab-pane fade in">
        <h3>Contacts</h3>

        <?= $this->render('_update/contacts', [
            'model' => $model,
            'form' => $form,
        ]) ?>

    </div>
    <div id="settings" class="tab-pane fade in">
        <h3>Settings</h3>

        <?= $this->render('_update/settings', [
            'model' => $model,
            'form' => $form,
        ]) ?>

    </div>
</div>

<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>


