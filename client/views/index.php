<?php
use app\models\entities\Restoraunts;
use app\models\entities\RestorauntOptions;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$saved = Yii::$app->request->get('saved');
$this->title = 'Рабочий стол';
$me = Yii::$app->user->identity;
$myRestoraunts = Restoraunts::find()
    ->Select('r.*, ro.*')
    ->From(Restoraunts::tableName().' AS r')
    ->LeftJoin(RestorauntOptions::tableName().' AS ro','r.`lb_restoraunts_id` = ro.`restoraunt_id`')
    ->Where('lb_user_id = :user_id', [':user_id' => $me->id])
    ->asArray()->all();

$model = new Restoraunts();
?>


<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <h2 class="h2-30">Рестораны</h2>
            <p class="description-after">Существует 2 основных подходя для разработки мобильных приложений: разработка нативных приложений с использование языка программирования для разрабатываемой платформы и создание гибридного приложения с использованием CSS, HTML и JavaScript. Зачастую выделяется и третий подход – мобильное веб приложение, но если мы говорим об установке апликации на смартфон и возможности скачать ее с Apple Store или Google Play, то это либо нативная разработка либо гибридная. Именно об этих двух подходах я и хочу поговорить в этой статье.</p>
            <div class="block-editor">
                <div class="row row-editor row-info-company">
                    <?php
                        if(isset($saved) && $saved) {
                            echo "<h1 class=\"h2-30\">Ресторан добавлен</h1>";
                        }
                    ?>

                    <?php $form = ActiveForm::begin();
                        $form->action= yii\helpers\Url::to('restoraunt/create');
                    ?>
                    <div class="col-md-4 col-xs-4">
                        <h2 class="h2-30">Добавить новый ресторан</h2>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Введите ИНН Вашей организации">-->
                            <?= $form->field($model, 'lb_inn')->textInput([
                                'maxlength' => 45,
                                'class' => 'form-input form-post',
                                'type' => 'numeric',
                                'placeholder' => 'Введите ИНН Вашей организации'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Введите название Вашей организации">-->
                            <?= $form->field($model, 'lb_restoraunts_name')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Введите название Вашей организации'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Введите ФИО генерального директора">-->
                            <?= $form->field($model, 'lb_director')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Введите ФИО генерального директора'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="tel" placeholder="Введите контактный телефон организации">-->
                            <?= $form->field($model, 'lb_phone')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Введите контактный телефон организации'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
                            <input class="form-input form-post" type="text" placeholder="Введите дополнительные контакты">
                            <?= $form->field($model, 'lb_additional_contact')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Введите дополнительные контакты'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="mail" placeholder="Введите почту компании">-->
                            <?= $form->field($model, 'lb_restoraunt_email')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Введите почту компании'
                            ])->label(false); ?>
                        </p>

                    </div>
                    <div class="col-md-4 col-xs-4">
                        <h2 class="h2-30">Дополнительные данные</h2>
                        <p class="input-p">
                            <!--                            <input class="form-input form-post" type="mail" placeholder="Введите почту компании">-->
                            <?= $form->field($model, 'lb_total_tables')->textInput([
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'number',
                                'placeholder' => 'Макс. Кол-во человек в ресторане'
                            ])->label(false); ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="number" placeholder="Средний чек в ресторане">-->
                            <?= Html::textInput("bill", '', [
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'number',
                                'placeholder' => 'Средний чек в ресторане'
                            ]) ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Направления кухни ресторана">-->
                            <?= Html::textInput("kitchen", '', [
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Направления кухни ресторана'
                            ]) ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Ссылка на группу в Вконтакте (соц сети)">-->
                            <?= Html::textInput("vk_link", '', [
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Ссылка на группу в Вконтакте (соц сети)'
                            ]) ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Ссылка на группу в Facebook (соц сети)">-->
                            <?= Html::textInput("fb_link", '', [
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Ссылка на группу в Facebook (соц сети)'
                            ]) ?>
                        </p>
                        <p class="input-p">
<!--                            <input class="form-input form-post" type="text" placeholder="Ссылка на группу в Instagramm (соц сети)">-->
                            <?= Html::textInput("insta_link", '', [
                                'maxlength' => 255,
                                'class' => 'form-input form-post',
                                'type' => 'text',
                                'placeholder' => 'Ссылка на группу в Instagramm (соц сети)'
                            ]) ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-4"></div>
                </div>
            </div>
            <?= Html::submitButton('Применить', ['class' => 'btn-line']) ?>
            <?php ActiveForm::end(); ?>

            <div class="block-avelible">
                <h2 class="h2-30">Доступные рестораны</h2>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>
            </div>


            <div class="block-order-smm">
                <?php
                foreach ($myRestoraunts as $myRestoraunt)
                {
                    ?>
                    <div class="cabinet-table">
                        <input type="hidden" value="<?=$myRestoraunt['lb_restoraunts_id']?>" class="restoraunt-id"/>
                        <div class="cabinet-cell">
                            <p class="name-rest"><?= $myRestoraunt['lb_restoraunts_name']?></p>
                            <p class="create-rest">дата создания: <?= (new \DateTime($myRestoraunt['lb_created_at']))->format('d')?> <?= (new \DateTime($myRestoraunt['lb_created_at']))->format('M')?> <?= (new \DateTime($myRestoraunt['lb_created_at']))->format('Y')?> г.</p>
                            <p class="balance-rest">Баланс счета ресторана на сервисе:<span>9 000 р.</span></p>
                        </div>
                        <div class="cabinet-cell">
                            <p class="input-p"><input class="form-input form-post sitename" type="text"
                                                      placeholder="Адрес сайта: https://designersatwork.com"></p>
                            <p class="input-p">
                                <input class="form-input form-post total-tables" type="number" placeholder="Макс. Кол-во человек в ресторане: " value="<?= isset($myRestoraunt['lb_total_tables']) ? $myRestoraunt['lb_total_tables']: '' ?>">
                            </p>
                            <p class="input-p">
                                <input class="form-input form-post vk-link" type="text" placeholder="Вконтакте: " value="<?= isset($myRestoraunt['restoraunt_vk_link']) ? $myRestoraunt['restoraunt_vk_link'] : ''?>">
                            </p>
                            <p class="input-p">
                                <input class="form-input form-post fb-link" type="text" placeholder="FaceBook: " value="<?= isset($myRestoraunt['restoraunt_fb_link']) ? $myRestoraunt['restoraunt_fb_link'] : '' ?>">
                            </p>
                            <p class="input-p">
                                <input class="form-input form-post insta-link" type="text" placeholder="Instagram: " value="<?= isset($myRestoraunt['restoraunt_insta_link']) ? $myRestoraunt['restoraunt_insta_link']: '' ?>">
                            </p>
                            <p class="input-p">
                                <input class="form-input form-post kitchen" type="text" placeholder="Направление кухни: " value="<?= isset($myRestoraunt['restoraunt_kitchen']) ? $myRestoraunt['restoraunt_kitchen']: '' ?>">
                            </p>
                            <p class="input-p">
                                <input class="form-input form-post bill" type="number" placeholder="Средний чек в ресторане: " value="<?= isset($myRestoraunt['restoraunt_bill']) ? $myRestoraunt['restoraunt_bill']: '' ?>">
                            </p>
                        </div>
                        <div class="cabinet-cell">
                            <button class="btn-line btn-center" onclick="editRest(this);">Сохранить</button>
                            <button class="btn-line btn-center" onclick="removeRest(this);">Удалить ресторан</button>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php
$this->registerJsFile('/js/clients/restoraunts.js', ['depends' => [\app\client\assets\AppAsset::className()]]);
?>