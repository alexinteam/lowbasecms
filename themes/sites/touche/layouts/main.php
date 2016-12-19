<?php
/*
 * @var $this app\components\web\View
 * @var $content string
 */

use app\themes\sites\creative\ThemeAsset;
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="<?= $this->getThemeUrl('favicon/favicon.ico') ?>">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    </head>

    <body data-spy="scroll" data-target=".navbar">
    <?php $this->beginBody() ?>



    <?= $this->render('partials/preloader'); ?>

    <?= $this->render('partials/navigation'); ?>

    <?= $this->render('partials/header'); ?>

    <?= $content; ?>

    <?= $this->render('partials/footer'); ?>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>