<?php
/* @var $gaStats array */
?>

<div class="well">
    <h2>Google Analytics Dashboard</h2>

    <div class="row">
        <div class="col-md-4">
            <h3>Сессии</h3>
            <?= $gaStats['sessions'] ?>
        </div>
        <div class="col-md-4">
            <h3>Пользователи</h3>
            <?= $gaStats['users'] ?>
        </div>
        <div class="col-md-4">
            <h3>Просмотры страницы</h3>
            <?= $gaStats['pageViews'] ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h3>Показатель отказов</h3>
            <?= $gaStats['bounceRate'] ?>
        </div>
        <div class="col-md-4">
            <h3>Органический поиск</h3>
            <?= $gaStats['organicSearches'] ?>
        </div>
        <div class="col-md-4">
            <h3>Страниц/Сессию</h3>
            <?= $gaStats['pageviewsPerSession'] ?>
        </div>
    </div>
</div>