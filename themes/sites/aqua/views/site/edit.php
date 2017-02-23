<div class="full-overlay">

    <?= $this->render('_form', ['site' => $site]); ?>

    <?= $this->render('blocks/nav'); ?>

    <div class="container-2">

        <?= $this->render('blocks/banner', ['site' => $site]); ?>

        <?= $this->render('blocks/meals', ['site' => $site]); ?>

        <?= $this->render('blocks/about', ['site' => $site]); ?>

        <?= $this->render('blocks/announce', ['site' => $site]); ?>

        <?= $this->render('blocks/advantages', ['site' => $site]); ?>

        <?= $this->render('blocks/call', ['site' => $site]); ?>

        <?= $this->render('blocks/team', ['site' => $site]); ?>

        <?= $this->render('blocks/reviews', ['site' => $site]); ?>

        <?= $this->render('blocks/download_menu', ['site' => $site]); ?>

    </div>
    <footer>
        <?= $this->render('blocks/footer', ['site' => $site, 'contactForm' => $contactForm]); ?>
    </footer>
</div>

<div id="file-before-queue" class="file-before-queue"></div>








