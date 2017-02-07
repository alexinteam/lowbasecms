<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\models\entities\MainSiteConfig;

?>

<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <h2 class="h2-30">Архив Новостей</h2>
            <p class="description-after">Существует 2 основных подходя для разработки мобильных приложений:
                разработка нативных приложений с использование языка программирования для разрабатываемой
                платформы и создание гибридного приложения с использованием CSS, HTML и JavaScript. Зачастую
                выделяется и третий подход – мобильное веб приложение, но если мы говорим об установке апликации
                на смартфон и возможности скачать ее с Apple Store или Google Play, то это либо нативная
                разработка либо гибридная. Именно об этих двух подходах я и хочу поговорить в этой статье.</p>
            <h2 class="h2-30">Фильтр Отзывов</h2>
            <div class="filter-block">
                <ul class="nav-filter">
                    <?php
                        foreach ($allYears as $year) {
                            if (strpos(Yii::$app->request->url,'/client/news/archive?year='.$year['year']) !== false) {
                                echo '<li class="active"><a href="/client/news/archive?year='.$year['year'].'">'.$year['year'].'</a></li>';
                            } else {
                                echo '<li><a href="/client/news/archive?year='.$year['year'].'">'.$year['year'].'</a></li>';
                            }
                        }
                    ?>
                </ul>
                <ul class="nav-filter">
                    <?php
                        if(Yii::$app->request->url == '/client/news/archive') {
                            echo '<li class="active">';
                        } else {
                            echo '<li>';
                        }
                    ?>
                        <a href="/client/news/archive">Все новости</a>
                    </li>
                    <?php
                        if (!is_null(Yii::$app->request->get('year'))) {
                            $year = Yii::$app->request->get('year');
                            foreach (MainSiteConfig::$monthArr as $key => $val) {
                                if((int)Yii::$app->request->get('month') == $key)  {
                                    echo '<li class="active"><a href="/client/news/archive?year='.$year.'&month=1">'.$val.'</a></li>';
                                } else {
                                    echo '<li><a href="/client/news/archive?year='.$year.'&month='.$key.'">'.$val.'</a></li>';
                                }
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="block-news-archive">

                    <?php
                    if(count($news)) {
                        for ($i=0;$i<count($news); $i++) {
                            if(($i % 2) == 0) {
                                echo '<div class="row">';
                            }
                            echo '<div class="col-md-6 col-xs-6">
                                <div class="table-news">
                                    <div class="cell-news">';
                            echo '<div class="thumbnail-middle thumbnail-news"><a href="#"><img src="' . '/' . $news[$i]->news_image . '" alt=""></a></div>';
                            echo '</div>';
                            echo '<div class="cell-news cell-text-news">';
                            echo '<p class="date-news">' . date_format(date_create($news[$i]->news_date), 'd.m.Y') . '</p>';
                            echo '<h3 class="name-news"><a href="javascript:">' . $news[$i]->news_title . '</a></h3>';
                            echo '<p class="text-news">' . $news[$i]->news_text . '<p>';
                            echo '<div class="block-abs">
                                <p>размещение в соц. сетях:</p>
                                <div class="social-for-news">
                                    <div class="soc-link instagram"></div>
                                    <div class="soc-link vk"></div>
                                    <div class="soc-link fb"></div>
                                    <div class="soc-link ok"></div>
                                </div>
                            </div>';
                            echo '</div>';
                            echo '<a href="javascript:" class="abs-item close-news">&times;</a>
                                <a href="javascript:" class="abs-item edit-news"></a>';
                            echo '</div></div>';
                            if(($i % 2) == 1) {
                                echo '</div>';
                            }

                        }
                    }
                    ?>

            </div>
            <a href="#" class="btn-line btn-center">Показать еще</a>
        </div>
    </div>
</div>