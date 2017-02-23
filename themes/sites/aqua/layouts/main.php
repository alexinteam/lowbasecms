<?php

use app\themes\sites\aqua\ThemeAsset;
use yii\helpers\Html;

ThemeAsset::register($this);

$mode = $this->params['mode'] ?: null;
$siteId = $this->params['site_id'] ?: null;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- saved from url=(0020)http://aquachip.pro/ -->
<html lang="zxx">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= $this->getThemeUrl('images/favicon/favicon.ico'); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <?php
        if($mode == 'view'){
            ?>

            <link href="<?= $this->getThemeUrl("css/main.css"); ?>" rel="stylesheet">
            <link href="<?= $this->getThemeUrl("css/bg-menu.css"); ?>" type="text/css" rel="stylesheet">
            <link href="<?= $this->getThemeUrl("css/index.css"); ?>" type="text/css" rel="stylesheet">

            <?php
        }

        if($mode == 'edit'){
            ?>

            <link href="<?= $this->getThemeUrl("vendors/uploadifive/uploadifive.css"); ?>" rel="stylesheet">

            <link href="<?= $this->getThemeUrl("css/editor-main.css"); ?>" rel="stylesheet">
            <link href="<?= $this->getThemeUrl("css/editor-bg-menu.css"); ?>" type="text/css" rel="stylesheet">
            <link href="<?= $this->getThemeUrl("css/editor-index.css"); ?>" type="text/css" rel="stylesheet">
            <link href="<?= $this->getThemeUrl("css/editor-website.css"); ?>" rel="stylesheet">

            <?php
        }

    ?>


    <!--<link href="<?/*= $this->getThemeUrl("css/editor-website.css"); */?>" rel="stylesheet">-->

    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= $this->getThemeUrl('images/favicon/favicon-152.png'); ?>">
    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->getThemeUrl('images/favicon/favicon-144.png'); ?>">
    <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= $this->getThemeUrl('images/favicon/favicon-120.png'); ?>">
    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->getThemeUrl('images/favicon/favicon-114.png'); ?>">
    <!-- For iPhone 6+ -->
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?= $this->getThemeUrl('images/favicon/favicon-180.png'); ?>">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->getThemeUrl('images/favicon/favicon-72.png'); ?>">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?= $this->getThemeUrl('images/favicon/favicon-57.png'); ?>">
    <!-- For Old Chrome -->
    <link rel="icon" href="<?= $this->getThemeUrl('images/favicon/favicon-32.png'); ?>" sizes="32x32">
    <!-- For IE10 Metro -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="favicon-144.png">
    <!-- Chrome for Android -->
    <link rel="icon" sizes="192x192" href="<?= $this->getThemeUrl('images/favicon/favicon-192.png'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<?= $content; ?>

<?php $this->endBody() ?>

<?php
    if($mode == 'edit'){
        ?>

        <script src="<?= $this->getThemeUrl("vendors/uploadifive/jquery.min.js"); ?>"></script>
        <script type="text/javascript">
            var jq172 = $.noConflict(true);
        </script>
        <script src="<?= $this->getThemeUrl("vendors/uploadifive/jquery.uploadifive.min.js"); ?>"></script>

        <script src="<?= $this->getThemeUrl("js/modules/editor.js"); ?>"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                var siteId = <?= $siteId ?>;
                editor.init(siteId);
            });
        </script>

    <?php
    }
    ?>

</body>
</html>
<?php $this->endPage() ?>