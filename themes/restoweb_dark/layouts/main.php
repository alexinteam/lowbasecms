<?php
/*
 * @var $this app\components\web\View
 * @var $content string
 */

use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon-152.png">
        <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon-144.png">
        <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon-120.png">
        <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon-114.png">
        <!-- For iPhone 6+ -->
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="favicon-180.png">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon-72.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="favicon-57.png">
        <!-- For Old Chrome -->
        <link rel="icon" href="favicon-32.png" sizes="32x32">

        <!-- For IE10 Metro -->
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="favicon-144.png">
        <!-- Chrome for Android -->
        <link rel="icon" sizes="192x192" href="favicon-192.png">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">
    <?php $this->beginBody() ?>

    <?= $this->render('_header'); ?>

    <?= $content; ?>

    <?= $this->render('_footer'); ?>

    <?= $this->render('_modals'); ?>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>