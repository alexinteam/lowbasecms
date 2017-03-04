<?php
use app\client\modules\social\models\Vk;
use \yii\helpers\Json;
$vk = new VK('5898723', 'slz7D7MAoq75zlxFCgXT', '8ac69792548768831c86109bb5399715c2f8ddd8ff672249f1e1977a2fd146089087e4bf25f09efb47005');

$users = $vk->api('wall.post', [
    'owner_id'   => '-141403043',
    'message' => 'first_name,last_name']);

$statsWeek = $vk->api('stats.get', [
    'group_id'   => '141403043',
    'date_from' => date("Y-m-d", strtotime("this week monday")),
    'date_to' => date("Y-m-d")
    ]);

$statsMonth = $vk->api('stats.get', [
    'group_id'   => '141403043',
    'date_from' => date("Y-m-d", strtotime("first day of this month")),
    'date_to' => date("Y-m-d")
]);

$statsYear = $vk->api('stats.get', [
    'group_id'   => '141403043',
    'date_from' => date("Y-m-d", strtotime("first day of january")),
    'date_to' => date("Y-m-d")
]);

$totalWeekNews = [];
foreach ($statsWeek['response'] as $statWeek) {
    array_push($totalWeekNews, $statWeek['views']);
}
$totalWeekNewsJson = Json::encode($totalWeekNews);

$totalMonthNews = [];
foreach ($statsMonth['response'] as $statMonth) {
    array_push($totalMonthNews, $statMonth['views']);
}
$totalMonthNewsJson = Json::encode($totalMonthNews);

$totalYearNews = [];
foreach ($statsYear['response'] as $statYear) {
    array_push($totalYearNews, $statYear['views']);
}
$totalYearNewsJson = Json::encode($totalYearNews);

$totalCities = [];
foreach ($statsYear['response'] as $statYear) {
    foreach ($statYear['cities'] as $city) {
        if(array_key_exists($city['name'], $totalCities)) {
            $totalCities[$city['name']] = $totalCities[$city['name']] + $city['visitors'];
        } else {
            $totalCities[$city['name']] = $city['visitors'];
        }
    }
}

?>
<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <h2 class="h2-30">Статистика Вконтакте</h2>
            <p class="description-after">Существует 2 основных подходя для разработки мобильных приложений: разработка нативных приложений с использование языка программирования для разрабатываемой платформы и создание гибридного приложения с использованием CSS, HTML и JavaScript. Зачастую выделяется и третий подход – мобильное веб приложение, но если мы говорим об установке апликации на смартфон и возможности скачать ее с Apple Store или Google Play, то это либо нативная разработка либо гибридная. Именно об этих двух подходах я и хочу поговорить в этой статье.</p>
            <div class="block-editor">
                <h2 class="h2-30">Добавить новый пост</h2>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>
                <div class="row row-editor">
                    <div class="col-md-4 col-xs-4">
                        <p class="input-p"><input class="form-input form-post" type="tel" placeholder="Введите заголовок поста"></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="select-style">
                            <select class="form-control select-block">
                                <option disabled="" selected="">Выберите категорию поста</option>
                                <option value="1">Категория</option>
                                <option value="2">Категория</option>
                                <option value="3">Категория</option>
                                <option value="4">Категория</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <button class="load-photo">Фотография новости</button>
                    </div>
                </div>
<!--                <div class="editor-form">-->
<!--                    <div class="editor-form__buttons">-->
<!--                        <button type="button" class="btn-editor bold"></button>-->
<!--                        <button type="button" class="btn-editor italic"></button>-->
<!--                        <button type="button" class="btn-editor underlined"></button>-->
<!--                        <button type="button" class="btn-editor strike"></button>-->
<!--                        <button type="button" class="btn-editor font"></button>-->
<!--                        <button type="button" class="btn-editor heading"></button>-->
<!--                        <button type="button" class="btn-editor drop"></button>-->
<!--                        <button type="button" class="btn-editor smiles"></button>-->
<!--                        <button type="button" class="btn-editor paragraph"></button>-->
<!--                        <button type="button" class="btn-editor quote"></button>-->
<!--                        <button type="button" class="btn-editor side-left"></button>-->
<!--                        <button type="button" class="btn-editor side-center"></button>-->
<!--                        <button type="button" class="btn-editor side-right"></button>-->
<!--                        <button type="button" class="btn-editor numbers"></button>-->
<!--                        <button type="button" class="btn-editor list"></button>-->
<!--                        <button type="button" class="btn-editor link"></button>-->
<!--                        <button type="button" class="btn-editor images"></button>-->
<!--                        <button type="button" class="btn-editor video"></button>-->
<!--                        <button type="button" class="btn-editor document"></button>-->
<!--                        <button type="button" class="btn-editor calendar"></button>-->
<!--                        <button type="button" class="btn-editor undo"></button>-->
<!--                        <button type="button" class="btn-editor redo"></button>-->
<!--                        <button type="button" class="btn-editor resize"></button>-->
<!--                        <button type="button" class="btn-editor code"></button>-->
<!--                    </div>-->
<!--                    <textarea rows="3" class="editor-form__textarea"></textarea>-->
<!--                </div>-->
            </div>
            <a href="#" class="btn-line btn-center">Опубликовать</a>
            <div class="block-stat">
                <h2 class="h2-30 h2-inline">Посетители и просмотры за</h2>
                <ul class="nav nav-tabs nav-stat nav-charts" role="tablist">
                    <li role="presentation" class="active"><a href="#stat-week" aria-controls="stat-week" role="tab" data-toggle="tab">Неделю</a></li>
                    <li role="presentation"><a href="#stat-month" aria-controls="stat-month" role="tab" data-toggle="tab">Месяц</a></li>
                    <li role="presentation"><a href="#stat-year" aria-controls="stat-year" role="tab" data-toggle="tab">Год</a></li>
                </ul>
                <div class="tab-content tab-charts">
                    <div role="tabpanel" class="tab-pane active" id="stat-week">
                        <div id="chart-line-1" class="chart-line"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="stat-month">
                        <div id="chart-line-2" class="chart-line"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="stat-year">
                        <div id="chart-line-3" class="chart-line"></div>
                    </div>
                </div>
                <div class="block-info-user">
                    <p>Группа Вконтакте: <a href="#" target="_blank">Ресторан Пармезан</a></p>
                    <p>Среднее суточное количество уникальных посетителей за последние 30 дней: <span>1000 человек</span></p>
                    <p>Общее количество уникальных посетителей за 30 дней: <span>1900 человек</span></p>
                    <p>Пол посетителей: <span>900 мужчин / 500 женщин</span></p>
                    <p>Топ 3 города посетителей: <span>Москва, Санкт-Петербург, Кемерово</span></p>
                    <p>Устройства посетителей: <span>900 ПК-Версия / 1500 Мобильная версия</span></p>
                    <p>Оставленных комментариев: <span>90 комментариев</span></p>
                </div>
            </div>
            <div class="block-stat">
                <h2 class="h2-30 h2-inline">Посетители</h2>
                <ul class="nav nav-tabs nav-stat" role="tablist">
                    <li role="presentation" class="active"><a href="#stat-man" aria-controls="stat-man" role="tab" data-toggle="tab">Мужчины</a></li>
                    <li role="presentation"><a href="#stat-woman" aria-controls="stat-woman" role="tab" data-toggle="tab">Женщины</a></li>
                </ul>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="stat-man">
                        <div class="chart-block">
                            <ul class="chart chart-bg">
                                <?php
                                    foreach ($statsYear['response'] as $statYear) {
                                        echo '<li><span style="height:100%"></span></li>';
                                    }
                                ?>
                            </ul>
                            <ul class="chart">
                                <li>
                                    <span style="height:15%" title="январь"></span>
                                </li>
                                <li>
                                    <span style="height:70%" title="февраль"></span>
                                </li>
                                <li>
                                    <span style="height:50%" title="март"></span>
                                </li>
                                <li>
                                    <span style="height:25%" title="апрель"></span>
                                </li>
<!--                                <li>-->
<!--                                    <span style="height:55%" title="май"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:78%" title="июнь"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:87%" title="июль"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:100%" title="август"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:85%" title="сентябрь"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:68%" title="октябрь"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:50%" title="ноябрь"></span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span style="height:80%" title="декабрь"></span>-->
<!--                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="stat-woman">
                        <div class="chart-block">
                            <ul class="chart chart-bg">
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                                <li>
                                    <span style="height:100%"></span>
                                </li>
                            </ul>
                            <ul class="chart">
                                <li>
                                    <span style="height:10%" title="январь"></span>
                                </li>
                                <li>
                                    <span style="height:60%" title="февраль"></span>
                                </li>
                                <li>
                                    <span style="height:60%" title="март"></span>
                                </li>
                                <li>
                                    <span style="height:15%" title="апрель"></span>
                                </li>
                                <li>
                                    <span style="height:50%" title="май"></span>
                                </li>
                                <li>
                                    <span style="height:90%" title="июнь"></span>
                                </li>
                                <li>
                                    <span style="height:47%" title="июль"></span>
                                </li>
                                <li>
                                    <span style="height:95%" title="август"></span>
                                </li>
                                <li>
                                    <span style="height:45%" title="сентябрь"></span>
                                </li>
                                <li>
                                    <span style="height:47%" title="октябрь"></span>
                                </li>
                                <li>
                                    <span style="height:65%" title="ноябрь"></span>
                                </li>
                                <li>
                                    <span style="height:70%" title="декабрь"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="block-stat">-->
<!--                <h2 class="h2-30 h2-inline">Статистика переходов на сайт:</h2>-->
<!--                <ul class="nav nav-tabs nav-stat nav-charts" role="tablist">-->
<!--                    <li role="presentation" class="active"><a href="#stat-week-1" aria-controls="stat-week-1" role="tab" data-toggle="tab">Неделю</a></li>-->
<!--                    <li role="presentation"><a href="#stat-month-1" aria-controls="stat-month-1" role="tab" data-toggle="tab">Месяц</a></li>-->
<!--                    <li role="presentation"><a href="#stat-year-1" aria-controls="stat-year-1" role="tab" data-toggle="tab">Год</a></li>-->
<!--                </ul>-->
<!--                <div class="tab-content tab-charts">-->
<!--                    <div role="tabpanel" class="tab-pane active" id="stat-week-1">-->
<!--                        <div id="chart-line-4" class="chart-line"></div>-->
<!--                    </div>-->
<!--                    <div role="tabpanel" class="tab-pane" id="stat-month-1">-->
<!--                        <div id="chart-line-5" class="chart-line"></div>-->
<!--                    </div>-->
<!--                    <div role="tabpanel" class="tab-pane" id="stat-year-1">-->
<!--                        <div id="chart-line-6" class="chart-line"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="block-info-user">-->
<!--                    <div class="block-info-user__div"><p>Прямые ссылки: <span>84</span></p></div>-->
<!--                    <div class="block-info-user__div"><p>Через другие паблики Вконтакте: <span>900</span></p></div>-->
<!--                    <div class="block-info-user__div"><p>По запросу Google: <span>80</span></p></div>-->
<!--                    <div class="block-info-user__div"><p>По запросу Яндекс: <span>50</span></p></div>-->
<!--                    <div class="block-info-user__div"><p>Через новости Вконтакте: <span>20</span></p></div>-->
<!--                    <div class="block-info-user__div"><p>По репостам пользователей: <span>70</span></p></div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="block-stat">
                <h2 class="h2-30">Топ городов посетителей</h2>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>
                <div class="chart-block chart-city">
                    <ul class="chart chart-bg">
                        <?php
                            foreach ($totalCities as $city => $visitors) {
                                echo '<li><span style="height:100%"></span></li>';
                            }
                        ?>
                    </ul>
                    <ul class="chart">
                        <?php
                        foreach ($totalCities as $city => $visitors) {
                            echo '<li><span style="height:'.($visitors/max($totalCities)*100).'%" title="'.$city.'" data-title="'.$visitors.' чел."></span></li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="block-stat">
                <h2 class="h2-30">Заказать рекламу Вконтакте</h2>
                <p class="description-after">Каждое расширение административных прав выполняется только для отдельного процесса, что предотвращает использование другими процессами маркера доступа без выдачи предупреждения пользователю. В результате наделенные административными полномочиями пользователи получают более детальный контроль над тем, что устанавливают приложения.</p>
            </div>
            <div class="block-order-smm">
                <div class="block-smm">
                    <h2 class="h2-30">Заказать <span>Размещение рекламы на Неделю</span></h2>
                    <p class="cost-review">цена: 8 000р</p>
                    <p>Не так давно перешел с Eclipse на Android Studio – впечатления исключительно положительные. Ничего не хочу сказать против Eclipse – мощная бесплатная оболочка разработки. Огромное количество настроек, возможности зашкаливают, однако дизайн и юзабилити сильно отстают. JetBrains все-таки выпускают отличные продукты, все чем пользовался было на высоте. Врать не буду, не все прижилось окончательно, но плохих воспоминаний точно не оставило. Так что, если вы пишите под Андроид и еще не пробовали Android Studio, то настоятельно рекомендую потестировать.</p>
                    <a href="#" class="btn-line">Заказать рекламу</a>
                </div>
                <div class="block-smm">
                    <h2 class="h2-30">Заказать <span>Размещение рекламы на 2 Недели</span></h2>
                    <p class="cost-review">цена: 25 000р</p>
                    <p>Не так давно перешел с Eclipse на Android Studio – впечатления исключительно положительные. Ничего не хочу сказать против Eclipse – мощная бесплатная оболочка разработки. Огромное количество настроек, возможности зашкаливают, однако дизайн и юзабилити сильно отстают. JetBrains все-таки выпускают отличные продукты, все чем пользовался было на высоте. Врать не буду, не все прижилось окончательно, но плохих воспоминаний точно не оставило. Так что, если вы пишите под Андроид и еще не пробовали Android Studio, то настоятельно рекомендую потестировать.</p>
                    <a href="#" class="btn-line">Заказать рекламу</a>
                </div>
                <div class="block-smm">
                    <h2 class="h2-30">Заказать <span>Размещение рекламы на Месяц</span></h2>
                    <p class="cost-review">цена: 35 000р</p>
                    <p>Не так давно перешел с Eclipse на Android Studio – впечатления исключительно положительные. Ничего не хочу сказать против Eclipse – мощная бесплатная оболочка разработки. Огромное количество настроек, возможности зашкаливают, однако дизайн и юзабилити сильно отстают. JetBrains все-таки выпускают отличные продукты, все чем пользовался было на высоте. Врать не буду, не все прижилось окончательно, но плохих воспоминаний точно не оставило. Так что, если вы пишите под Андроид и еще не пробовали Android Studio, то настоятельно рекомендую потестировать.</p>
                    <a href="#" class="btn-line">Заказать рекламу</a>
                </div>
                <div class="block-smm">
                    <h2 class="h2-30">Заказать <span>Размещение рекламы на 2 Месяца</span></h2>
                    <p class="cost-review">цена: 50 000р</p>
                    <p>Не так давно перешел с Eclipse на Android Studio – впечатления исключительно положительные. Ничего не хочу сказать против Eclipse – мощная бесплатная оболочка разработки. Огромное количество настроек, возможности зашкаливают, однако дизайн и юзабилити сильно отстают. JetBrains все-таки выпускают отличные продукты, все чем пользовался было на высоте. Врать не буду, не все прижилось окончательно, но плохих воспоминаний точно не оставило. Так что, если вы пишите под Андроид и еще не пробовали Android Studio, то настоятельно рекомендую потестировать.</p>
                    <a href="#" class="btn-line">Заказать рекламу</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$js = <<< JS
    var totalWeekNews = $totalWeekNewsJson;
    var totalMonthNews = $totalMonthNewsJson;
    var totalYearNews = $totalYearNewsJson;
JS;

$this->registerJs($js, yii\web\View::POS_HEAD);
$this->registerJsFile('/js/clients/statistics.js', ['depends' => [\app\client\assets\AppAsset::className()]]);
?>