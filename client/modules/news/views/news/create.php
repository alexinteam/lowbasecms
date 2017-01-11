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
                    echo "<h1 class=\"h2-30\">Новость добавлена</h1>";
                }
            ?>
            <h2 class="h2-30">Новости</h2>
            <p class="description-after">Существует 2 основных подходя для разработки мобильных приложений: разработка нативных приложений с использование языка программирования для разрабатываемой платформы и создание гибридного приложения с использованием CSS, HTML и JavaScript. Зачастую выделяется и третий подход – мобильное веб приложение, но если мы говорим об установке апликации на смартфон и возможности скачать ее с Apple Store или Google Play, то это либо нативная разработка либо гибридная. Именно об этих двух подходах я и хочу поговорить в этой статье.</p>
            <?php $form = ActiveForm::begin();
                $form->action= yii\helpers\Url::to('add');
            ?>
            <div class="block-editor">
                <h2 class="h2-30">Добавить новую новость</h2>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>

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
            <?= Html::submitButton('Опубликовать', ['class' => 'btn-line btn-center']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>