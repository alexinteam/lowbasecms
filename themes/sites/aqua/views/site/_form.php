<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin([
    'id' => 'customize-controls',
    'options' => ['class' => 'full-overlay-sidebar'],
]) ?>

    <div class="row row-controls-btns">
        <div class="col-md-12 col-xs-12">
            <input type="submit" class="btn-line btn-save" value="Сохранить">
            <a href="index-for-user.html" class="customize-controls-close">&times;</a>
        </div>
    </div>

    <div class="wp-full-overlay-sidebar-content">

        <!-- Header-->
        <div class="row row-editor row-name-rest">
            <div class="col-md-12 col-xs-12">
                <p>Вы настраиваете <span>Parmezan 1905</span></p>
            </div>
        </div>


        <div class="full-overlay-sidebar-content">

            <!-- active theme -->
            <div class="row row-editor row-name-theme">
                <div class="col-md-12 col-xs-12">
                    <p>Активная тема <span>Individual</span></p>
                    <button type="button" class="button change-theme" tabindex="0">Сменить</button>
                </div>
            </div>

            <div class="panel-group panel-editor" id="accordion">

                <!-- common settings -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                            Общие настройки</a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-site-name">Название сайта</label>
                                    <input id="editor-site-name" type="text" value="Parmezan 1905">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-site-description">Краткое описание</label>
                                    <input id="editor-site-description" type="text" value="">
                                </li>
                                <li>
                                    <label class="panel-editor-title">Иконка сайта</label>
                                    <p class="panel-editor-description">Иконка сайта используется в браузере и на экранах мобильных устройств. Иконка должна быть квадратной, не менее 512 пикселей по ширине и высоте.</p>

                                    <button type="button" class="load-btn editor-upload">Загрузить иконку</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- header -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                            Шапка сайта</a>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title">Логотип</label>

                                    <button type="button" class="load-btn editor-upload">Загрузить логотип</button>
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-head-address">Адрес</label>
                                    <input id="editor-head-address" type="text" value="">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-head-phone">Телефон</label>
                                    <input id="editor-head-phone" type="text" value="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- banner -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                            Баннер</a>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <?= $form->field($site, 'banner_greeting')->textInput(['id' => 'editor-banner-greeting']) ?>

                                </li>
                                <li>
                                    <?= $form->field($site, 'banner_description')->textarea(['id' => 'editor-banner-description', 'rows' => 5]) ?>
                                </li>
                             </ul>
                        </div>
                    </div>
                </div>

                <!-- about -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                            О ресторане</a>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <?php
                                for($i=1; $i <= 5; $i++){
                                    ?>

                                    <li>
                                        <?= $form->field($site, 'about_header_' . $i)->textInput(['id' => 'editor-about-header' . $i]) ?>
                                    </li>
                                    <li>
                                        <?= $form->field($site, 'about_description_' . $i)->textarea(['id' => 'editor-about-description' . $i, 'rows' => 5]) ?>
                                    </li>
                                    <li>
                                        <button type="button" class="load-btn editor-upload">Загрузить фото</button>
                                    </li>

                                    <!--<li>
                                        <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                    </li>-->

                                    <li role="separator" class="divider"></li>

                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- announce -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                            Афиша</a>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <?= $form->field($site, 'announce_header')->textInput(['id' => 'editor-announce-header']) ?>
                                </li>
                                <li>
                                    <?= $form->field($site, 'announce_description')->textarea(['id' => 'editor-announce-description', 'rows' => 5]) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- advantages -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">
                            Преимущества</a>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <?php
                                for($i=1; $i <= 5; $i++){
                                    ?>

                                    <li>
                                        <?= $form->field($site, 'advantage_header_' . $i)->textInput(['id' => 'editor-advantage-header'. $i]) ?>
                                    </li>
                                    <li>
                                        <?= $form->field($site, 'advantage_description_' . $i)->textarea(['id' => 'editor-advantage-description'. $i, 'rows' => 5]) ?>
                                    </li>
                                    <li>
                                        <button type="button" class="load-btn editor-upload">Загрузить иконку</button>
                                    </li>

                                    <!--<li>
                                        <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                    </li>-->

                                    <li role="separator" class="divider"></li>

                                    <?php

                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- call -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed">
                            Блок призыва</a>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <?= $form->field($site, 'call_header')->textInput(['id' => 'editor-call-header']) ?>
                                </li>
                                <li>
                                    <?= $form->field($site, 'call_description')->textarea(['id' => 'editor-call-description', 'rows' => 5]) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- menu -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed">
                            Меню ресторана</a>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title">Меню ресторана</label>
                                    <p class="panel-editor-description">На сайте представлена возможность скачивания меню для всех пользователей. Загрузите свое меню в формате .pdf или .doc</p>
                                    <button type="button" class="load-btn editor-upload">Загрузить меню</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed">
                            Подвал сайта</a>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <?= $form->field($site, 'site_address')->textInput(['id' => 'editor-footer-address']) ?>
                                </li>
                                <li>
                                    <?= $form->field($site, 'site_phone')->textInput(['id' => 'editor-footer-phone']) ?>

                                    <button type="button" class="button editor-btn" tabindex="0">Добавить номер</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--</form>-->
<?php ActiveForm::end() ?>