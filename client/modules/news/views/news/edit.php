<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\views\widgets\Editor;
use nex\datepicker\DatePicker;
?>
<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <?php
                if(isset($saved) && $saved) {
                    echo "<h1 class=\"h2-30\">Новость  обновлена</h1>";
                }
            ?>
            <h2 class="h2-30">Новости</h2>
            <?php $form = ActiveForm::begin();
                $form->action= yii\helpers\Url::to('save');
            ?>
            <div class="block-editor">
                <?= $form->field($model, 'news_title')->textInput([
                    'maxlength' => 255,
                    'class' => 'form-input',
                    'type' => 'tel',
                    'placeholder' => 'Введите заголовок новости'
                ])->label(false); ?>
                <?= $form->field($model, 'news_text')->textArea([
                    'class' => 'form-input',
                    'type' => 'tel',
                    'rows' => '6',
                    'placeholder' => 'Введите текст новости'
                ])->label(false); ?>

                <div class="row row-editor">
                    <div class="col-md-4 col-xs-4">
                        <?= DatePicker::widget([
                            'model' => $model,
                            'attribute' => 'news_date',
                            'language' => 'ru',
                            'size' => 'lg',
                            'readonly' => false,
                            'placeholder' => 'Дата новости',
                            'class' => 'form-control select-block',
                            'clientOptions' => [
                                'format' => 'Y-MM-DD',
                            ]
                        ]);?>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="select-style">
                            <?= $form->field($model, 'news_category_id')->dropDownList($categories,[
                                'prompt' => 'Категория новости',
                                'class' => 'form-control select-block'
                            ])->label(false); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <?= $form->field($model, 'news_image')->fileInput([
                            'class' => 'load-photo',
                        ])->label(false); ?>
                    </div>
                </div>
            </div>
            <?= Html::submitButton('Сохранить', ['class' => 'btn-line btn-center']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>