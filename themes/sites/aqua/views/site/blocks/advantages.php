<?php

use yii\helpers\Html;

/**
 * @var $site \app\models\entities\Site
 */
?>

<div class="page5">
    <div class="w-main anim">
        <h2 class="h2-42">Почему Наш ресторан?</h2>
        <div class="row row-why left">

            <div class="col-md-6">

                <!--upload-advantage-icon---><?/*= $i */?>

                <?php for($i = 1; $i <= 4; $i++): ?>
                    <?php
                    $header = 'advantage_header_' . $i;
                    $headerId = 'view-advantage-header' . $i;
                    $aboutDescription = 'advantage_description_' . $i;
                    $aboutDescriptionId = 'view-advantage-description' . $i;
                    $blockId = 'block-dl-' . $i;
                    $imgField = 'advantage_icon_' . $i;
                    $imgId = 'upload-advantage-icon-' . $i;
                    ?>

                    <dl class="block-dl <?= $blockId; ?>">
                        <dt id="<?= $headerId ?>">
                            <img id="<?= $imgId ?>" src="<?= $site->$imgField ?>">
                            <?= Html::encode($site->$header); ?>
                        </dt>
                        <dd id="<?= $aboutDescriptionId ?>">
                            <?= Html::encode($site->$aboutDescription); ?>
                        </dd>
                    </dl>

                    <?php if($i%2 == 0): ?>
                        </div>
                        <div class="col-md-6">
                    <?php endif ?>
                <?php endfor; ?>

            </div>
        </div>
    </div>
</div>