<?php
/* @var $this \yii\web\View */
/* @var $content string */

if (Yii::$app->user->isGuest) {
    $items = [
        ['label' => 'Войти', 'url' => ['/login']],
        ['label' => 'Зарегистрироваться', 'url' => ['/signup']],
    ];
} else {
    $items = [
        ['label' => 'В личный кабинет', 'url' => ['/profile']],
    ];
    if (Yii::$app->user->can('admin')) {
        $items[] = ['label' => 'Вход в админ панель', 'url' => ['/admin']];
    }
    $items[] = ['label' => 'Выйти', 'url' => ['/logout']];
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/image/icons/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Restoweb</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/bg-menu.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- For new browsers - multisize ico  -->
        <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="css/image/icons/favicon.ico">
        <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="css/image/icons/favicon-152.png">
        <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="css/image/icons/favicon-144.png">
        <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="css/image/icons/favicon-120.png">
        <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="css/image/icons/favicon-114.png">
        <!-- For iPhone 6+ -->
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="css/image/icons/favicon-180.png">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="css/image/icons/favicon-72.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="css/image/icons/favicon-57.png">
        <!-- For Old Chrome -->
        <link rel="icon" href="css/image/icons/favicon-32.png" sizes="32x32">
        <!-- For IE10 Metro -->
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="favicon-144.png">
        <!-- Chrome for Android -->
        <link rel="icon" sizes="192x192" href="css/image/icons/favicon-192.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top bg-menu for-main">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand name-brand" href="javascript:"><img src="css/image/restoweb-white.png" class="logo-main" alt="Logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="navbar-nav-item"><a href="" class="main-link">Возможности</a></li>
                <li class="navbar-nav-item"><a href="">Тарифные планы</a></li>
                <?php
                foreach ($items as $item) {
                    echo '<li class="navbar-nav-item"><a href="'.$item['url'][0].'">'.$item['label'].'</a></li>';
                }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
    <div class="row row-header">
        <div class="col-md-12">
            <p class="header__p">Удобно и просто<span>Создай сайт для своего ресторана и управляй им</span></p>
            <a class="btn btn-default create-btn">Создать сайт</a><!--кнопка перенаправляет на страницу регистрации пользователя-->
        </div>
    </div>
</nav>

<div class="container-2">

    <?= $content ?>

    <div class="footer-info center">
        <div class="w-main">
            <div class="row">
                <!--разметка футера-->
                <div class="col-md-12 col-xs-12 center">
                    <p>2016 RESTOWEB</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-center">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <img class="table-info__img" src="css/image/cabinet.jpg" alt="cabinet">
            </div>
        </div>
    </div>
</div>

</body>
</html>
