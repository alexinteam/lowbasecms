<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<div class="page3">
    <div class="block-country">

        <?php for($i = 1; $i <= 4; $i++): ?>
            <?php
            $header = 'about_header_' . $i;
            $headerId = 'view-about-header' . $i;
            $aboutDescription = 'about_description_' . $i;
            $aboutDescriptionId = 'view-about-description' . $i;
            //$img = 'images/bg-0' . $i . '.png';
            $imgField = 'about_photo_' . $i;
            $imgId = 'upload-about-photo-' . $i;
            ?>

            <div class="table-country table-left">
                <div class="cell-country anim-right">
                    <img id="<?= $imgId ?>" class="bg-country" src="<?= $site->$imgField ?>" alt="Thailand">
                </div>
                <div class="cell-country anim-left">
                    <p>
                        <strong id="<?= $headerId ?>">
                            <?= Html::encode($site->$header); ?>
                        </strong>
                        <span id="<?= $aboutDescriptionId ?>">
                        <?= Html::encode($site->$aboutDescription); ?>
                    </span>
                    </p>
                </div>
            </div>
        <?php endfor; ?>





        <!--<div class="table-country table-right">
            <div class="cell-country anim-right">
                <p>
                    <strong id="view-about-header2">ЗАГОЛОВОК 2</strong>
                    <span id="view-about-description2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </span>
                </p>
            </div>
            <div class="cell-country anim-left">
                <img class="bg-country" src="<?/*= $this->getThemeUrl('images/bg-02.png'); */?>" alt="Thailand">
            </div>
        </div>
        <div class="table-country table-left">
            <div class="cell-country anim-right">
                <img class="bg-country" src="<?/*= $this->getThemeUrl('images/bg-03.png'); */?>" alt="Thailand">
            </div>
            <div class="cell-country anim-left">
                <p>
                    <strong id="view-about-header3">ЗАГОЛОВОК 3</strong>
                    <span id="view-about-description3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </span>
                </p>
            </div>
        </div>
        <div class="table-country table-right">
            <div class="cell-country anim-right">
                <p>
                    <strong id="view-about-header4">ЗАГОЛОВОК 4</strong>
                    <span id="view-about-description4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </span>
                </p>
            </div>
            <div class="cell-country anim-left">
                <img class="bg-country" src="<?/*= $this->getThemeUrl('images/bg-04.png'); */?>" alt="Thailand">
            </div>
        </div>
    </div>-->
</div>