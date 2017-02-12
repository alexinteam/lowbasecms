<div class="full-overlay">

    <?= $this->render('_form', ['site' => $site]); ?>

    <?= $this->render('blocks/nav'); ?>

    <div class="container-2">

        <?= $this->render('blocks/banner'); ?>

        <?= $this->render('blocks/meals'); ?>

        <?= $this->render('blocks/about'); ?>

        <?= $this->render('blocks/announce'); ?>

        <?= $this->render('blocks/advantages'); ?>

        <?= $this->render('blocks/call'); ?>

        <?= $this->render('blocks/team'); ?>

        <?= $this->render('blocks/reviews'); ?>

        <?= $this->render('blocks/download_menu'); ?>

    </div>
    <footer>
        <?= $this->render('blocks/footer'); ?>
    </footer>
</div>








