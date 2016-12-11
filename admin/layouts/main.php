<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

use lowbase\user\UserAsset;
use yii\helpers\Html;
$userAsset = UserAsset::register($this);

/* @var $this \yii\web\View */
/* @var $content string */

    $me = Yii::$app->user->identity;

    if (class_exists('app\admin\assets\AppAsset')) {
        app\admin\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    //dmstr\web\AdminLteAsset::register($this);

    //$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php //$this->head() ?>

        <?php echo $this->render('headIncludes.php'); ?>

    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    
        <?php
            echo $this->render('header.php', [
                    'userAsset' => $userAsset,
                    'me' => $me
                ]
            );
            echo '<div class="page-container">';
            echo $this->render('left.php');
            echo $this->render('content.php', [
                    'content' => $content
                ]
            );
            echo $this->render('quickSidebar.php');
            echo '</div>';

            echo $this->render('bottomIncludes.php');
        ?>

    </body>
    </html>
    <?php $this->endPage() ?>
