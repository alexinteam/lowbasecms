<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <?php
                if($news) {
            ?>
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
                            <li class="active"><a href="#">2015</a></li>
                            <li><a href="#">2016</a></li>
                            <li class="no-item"><a href="#">2017</a></li>
                            <li class="no-item"><a href="#">2018</a></li>
                        </ul>
                        <ul class="nav-filter">
                            <li class="active"><a href="#">Все новости</a></li>
                            <li><a href="#">Январь</a></li>
                            <li><a href="#">Февраль</a></li>
                            <li><a href="#">Март</a></li>
                            <li><a href="#">Апрель</a></li>
                            <li><a href="#">Май</a></li>
                            <li><a href="#">Июнь</a></li>
                            <li><a href="#">Июль</a></li>
                            <li><a href="#">Август</a></li>
                            <li><a href="#">Сентябрь</a></li>
                            <li><a href="#">Октябрь</a></li>
                            <li><a href="#">Ноябрь</a></li>
                            <li><a href="#">Декабрь</a></li>
                        </ul>
                    </div>
                    <div class="block-news-archive">
                        <div class="row">
                            <?php
                            foreach ($news as $newsItem) {
                                echo '<div class="col-md-6 col-xs-6">
                                    <div class="table-news">
                                        <div class="cell-news">';
                                echo '<div class="thumbnail-middle thumbnail-news"><a href="#"><img src="' . '/' . $newsItem->news_image . '" alt=""></a></div>';
                                echo '</div>';
                                echo '<div class="cell-news cell-text-news">';
                                echo '<p class="date-news">' . date_format(date_create($newsItem->news_date), 'd.m.Y') . '</p>';
                                echo '<h3 class="name-news"><a href="javascript:">' . $newsItem->news_title . '</a></h3>';
                                echo '<p class="text-news">' . $newsItem->news_text . '<p>';
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
                            }
                            ?>
                        </div>
                    </div>
                    <a href="#" class="btn-line btn-center">Показать еще</a>
            <?php
                } else {
                    echo '<h2 class="h2-30">Новостей нет</h2>';
                }
            ?>
        </div>
    </div>
</div>