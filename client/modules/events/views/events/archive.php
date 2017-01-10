<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="container-2 page-content">
    <div class="">
        <div class="w-main left">
            <h2 class="h2-30">События и встречи ресторана</h2>
            <p class="description-after">Существует 2 основных подходя для разработки мобильных приложений: разработка нативных приложений с использование языка программирования для разрабатываемой платформы и создание гибридного приложения с использованием CSS, HTML и JavaScript. Зачастую выделяется и третий подход – мобильное веб приложение, но если мы говорим об установке апликации на смартфон и возможности скачать ее с Apple Store или Google Play, то это либо нативная разработка либо гибридная. Именно об этих двух подходах я и хочу поговорить в этой статье.</p>
            <h2 class="h2-30">Фильтр Событий ресторана</h2>
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
                <ul class="nav-filter">
                    <li class="active"><a href="#">Категория 1</a></li>
                    <li><a href="#">Категория 2</a></li>
                    <li><a href="#">Категория 3</a></li>
                    <li><a href="#">Категория 4</a></li>
                </ul>
            </div>
            <div class="block-news-archive">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="table-news">
                            <div class="cell-news">
                                <div class="thumbnail-middle thumbnail-news"><a href="#"><img src="images/bg-4.png" alt=""></a></div>
                            </div>
                            <div class="cell-news cell-text-news">
                                <p class="date-news">18.11.2016</p>
                                <h3 class="name-news"><a href="javascript:">Название новой встречи</a></h3>
                                <p class="text-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                                <div class="block-abs">
                                    <p>размещение в соц. сетях:</p>
                                    <div class="social-for-news">
                                        <div class="soc-link instagram"></div>
                                        <div class="soc-link vk"></div>
                                        <div class="soc-link fb"></div>
                                        <div class="soc-link ok"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:" class="abs-item close-news">&times;</a>
                            <a href="javascript:" class="abs-item edit-news"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="table-news">
                            <div class="cell-news">
                                <div class="thumbnail-middle thumbnail-news"><a href="#"><img src="images/bg-4.png" alt=""></a></div>
                            </div>
                            <div class="cell-news cell-text-news">
                                <p class="date-news">18.11.2016</p>
                                <h3 class="name-news"><a href="javascript:">Название новой встречи</a></h3>
                                <p class="text-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="block-abs">
                                    <p>размещение в соц. сетях:</p>
                                    <div class="social-for-news">
                                        <div class="soc-link instagram"></div>
                                        <div class="soc-link vk"></div>
                                        <div class="soc-link fb"></div>
                                        <div class="soc-link ok"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:" class="abs-item close-news">&times;</a>
                            <a href="javascript:" class="abs-item edit-news"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="table-news">
                            <div class="cell-news">
                                <div class="thumbnail-middle thumbnail-news"><a href="#"><img src="images/bg-4.png" alt=""></a></div>
                            </div>
                            <div class="cell-news cell-text-news">
                                <p class="date-news">18.11.2016</p>
                                <h3 class="name-news"><a href="javascript:">Длинное название новой встречи</a></h3>
                                <p class="text-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="block-abs">
                                    <p>размещение в соц. сетях:</p>
                                    <div class="social-for-news">
                                        <div class="soc-link instagram"></div>
                                        <div class="soc-link vk"></div>
                                        <div class="soc-link fb"></div>
                                        <div class="soc-link ok"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:" class="abs-item close-news">&times;</a>
                            <a href="javascript:" class="abs-item edit-news"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="table-news">
                            <div class="cell-news">
                                <div class="thumbnail-middle thumbnail-news"><a href="#"><img src="images/bg-4.png" alt=""></a></div>
                            </div>
                            <div class="cell-news cell-text-news">
                                <p class="date-news">18.11.2016</p>
                                <h3 class="name-news"><a href="javascript:">Название новой встречи</a></h3>
                                <p class="text-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="block-abs">
                                    <p>размещение в соц. сетях:</p>
                                    <div class="social-for-news">
                                        <div class="soc-link instagram"></div>
                                        <div class="soc-link vk"></div>
                                        <div class="soc-link fb"></div>
                                        <div class="soc-link ok"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:" class="abs-item close-news">&times;</a>
                            <a href="javascript:" class="abs-item edit-news"></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn-line btn-center">Показать еще</a>
        </div>
    </div>
</div>