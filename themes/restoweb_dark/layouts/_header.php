<?= $this->render('_navigation'); ?>

<div class="conteiner-banner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= $this->getThemeUrl('images/bg-2.png'); ?>" alt="Slider">
            </div>

            <div class="item">
                <img src="<?= $this->getThemeUrl('images/bg-2.png'); ?>" alt="Slider">
            </div>

            <div class="item">
                <img src="<?= $this->getThemeUrl('images/bg-2.png'); ?>" alt="Slider">
            </div>

            <div class="item">
                <img src="<?= $this->getThemeUrl('images/bg-2.png'); ?>" alt="Slider">
            </div>
        </div>
    </div>
    <div class="abs-block">
        <img src="<?= $this->getThemeUrl('images/logo-big.png'); ?>" alt="Logo">
        <p class="banner-text"><strong>УДОБНО И БЫСТРО</strong>Создай сайт для своего ресторана и управляй&nbsp;им.</p>
        <a class="btn btn-default create-btn"  data-toggle="modal" data-target="#reg">Создать сайт</a>
    </div>
</div>