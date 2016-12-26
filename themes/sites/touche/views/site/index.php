<?php
/**
 * @var $model app\models\entities\Site
 */
?>

<!-- Welcome -->
<section class="section_welcome" id="section_welcome">

    <div class="container welcome__body">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">
                <div class="welcome__content">

                    <!-- Title -->
                    <h3 class="welcome__title">
                        <span><?= $site->title ?> / </span> cafe & restaurant
                    </h3>

                    <!-- Heading -->
                    <h1 class="welcome__heading">
                        <?= $site->title ?>
                    </h1>

                    <!-- Info -->
                    <p class="welcome__info">
                        <?= $site->description ?>
                        <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illo, alias animi iusto neque, sint corrupti? Laudantium, dignissimos id excepturi facilis, facere saepe quasi placeat praesentium ipsa sapiente illo molestiae?-->
                    </p>

                    <!-- Button -->
                    <div class="welcome__btn">
                        <a href="#section_reservation" class="btn btn-default">
                            Make reservation
                        </a>
                    </div>

                </div> <!-- / .welcome__content -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

    <div class="container welcome__footer">
        <div class="row">
            <div class="col-sm-6">

                <!-- Social icons -->
                <ul class="welcome__social">
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                </ul>

            </div>
            <div class="col-sm-6">

                <div class="welcome__address">
                    <i class="fa fa-map-marker"></i> <?= $site->address ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Background image -->
    <div class="welcome__bg"></div>

</section>

<!-- Discover -->
<section class="section_discover" id="section_discover">

    <div class="container">
        <div class="row">
            <div class="col-sm-2 vertical-align-top">

                <p class="discover__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>

            </div>
            <div class="col-sm-4 vertical-align-top">

                <div class="discover__img">
                    <img src="http://placehold.it/820x1280" class="img-responsive" alt="...">
                </div>

            </div>
            <div class="col-sm-6 vertical-align-middle">

                <div class="discover__content">
                    <h3 class="section__heading">
                        <i>Lorem ipsum</i> dolor sit amet
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias veritatis nisi, consequatur, laborum libero a neque ducimus. Porro rem illum quo nostrum quisquam asperiores, blanditiis, consectetur. Possimus facilis velit, voluptatibus!
                    </p>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- Discover -->
<section class="section_discover">

    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-push-6 vertical-align-bottom">

                <p class="discover__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>

            </div>
            <div class="col-sm-4 col-sm-push-6 vertical-align-top">

                <div class="discover__img alt">
                    <img src="http://placehold.it/820x1280" class="img-responsive" alt="...">
                </div>

            </div>
            <div class="col-sm-6 col-sm-pull-6 vertical-align-middle">

                <div class="discover__content">
                    <h3 class="section__heading">
                        <i>Velit ipsa</i> quidem debitis amet
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quae similique asperiores consequatur! Nihil temporibus qui enim, ab voluptates corporis commodi eum maxime. Accusamus voluptates a, et quidem! Quo, et?
                    </p>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- About -->
<section class="section_about">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <p class="discover__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam placeat molestiae ab, consectetur.
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- Menu -->
<section class="section_menu" id="section_menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="section__heading text-center">
                    Our menu
                </h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                    Ratione numquam eos perferendis itaque hic unde, ad, laudantium minima.
                </p>

                <div class="menu__container">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs menu__nav" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#" role="tab" data-filter=".menu_mains">
                                Mains
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" role="tab" data-filter=".menu_lunch">
                                Lunch
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" role="tab" data-filter=".menu_dinner">
                                Dinner
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" role="tab" data-filter=".menu_drinks">
                                Drinks
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active">

                            <div class="menu__page">
                                <div class="row">

                                    <!-- Mains -->
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Lorem ipsum dolor sit amet
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $15
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Phasellus non elit in dolor
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $10
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Fusce id ante ut arcu consectetur
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $23
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                In vel odio eu massa semper
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $35
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Fusce sed dolor eget tortor
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $16
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Morbi ac est consectetur
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $18
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Sed eu erat ut mi suscipit
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $21
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_mains">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Praesent bibendum nisl id
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $10
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Lunch -->
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Integer tempor diam sit
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $18
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Integer tristique dolor et
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $16
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nulla semper lacus ut nulla
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $28
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nullam dictum neque interdum
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $15
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Morbi dictum sem vel consequat
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $11
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Donec ac tellus nec leo pharetra
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $30
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Mauris id nisi et velit faucibus
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $19
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_lunch">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Suspendisse quis eros sed justo
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $10
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dinner -->
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Mauris sed lorem tincidunt
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $15
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nunc sed lorem non orci convallis
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $12
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nunc placerat enim quis odio ultricies
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $11
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Vivamus ornare urna a ipsum
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $7
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Suspendisse congue dui quis
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $5
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Aliquam sed dolor facilisis
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Cras a sem vitae ipsum vehicula
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $17
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_dinner">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Cras aliquet tellus id mi posuere
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $20
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Drinks -->
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Cras aliquet tellus id mi posuere
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $15
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nam placerat ligula eget massa
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $22
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Cras in eros id nisi sodales suscipit
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $25
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Vivamus suscipit orci eu urna gravida
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $18
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Mauris quis massa rhoncus nisi
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $19
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Fusce tristique libero vitae imperdiet
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $5
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Nullam pretium tortor non mauris cursus
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $12
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 menu-page__item menu_drinks">
                                        <div class="menu__item">
                                            <h4 class="menu-item__title">
                                                Praesent sollicitudin sapien eu lectus
                                            </h4>
                                            <p class="menu-item__ingredients">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae repellendus nihil minus, eius illum, esse eos quia nostrum impedit hic.
                                            </p>
                                            <div class="menu-item__price">
                                                $8
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- / .row -->
                            </div> <!-- / .menu__page -->

                        </div>
                    </div>

                </div> <!-- / .menu__container -->

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-12">

                <div class="menu__featured">
                    <div class="row">
                        <div class="col-sm-12">

                            <h3 class="menu-featured__heading">
                                Featured dishes
                            </h3>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">

                            <div class="menu-featured__item">
                                <div class="menu-featured-item__img">
                                    <img src="http://placehold.it/640x388" alt="...">
                                </div>
                                <h5 class="menu-featured-item__heading">
                                    Lorem ipsum dolor
                                </h5>
                                <div class="menu-featured-item__price">
                                    $15
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-3">

                            <div class="menu-featured__item">
                                <div class="menu-featured-item__img">
                                    <img src="http://placehold.it/640x388" alt="...">
                                </div>
                                <h5 class="menu-featured-item__heading">
                                    Lorem ipsum dolor
                                </h5>
                                <div class="menu-featured-item__price">
                                    $10
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-3">

                            <div class="menu-featured__item">
                                <div class="menu-featured-item__img">
                                    <img src="http://placehold.it/640x388" alt="...">
                                </div>
                                <h5 class="menu-featured-item__heading">
                                    Lorem ipsum dolor
                                </h5>
                                <div class="menu-featured-item__price">
                                    $18
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-3">

                            <div class="menu-featured__item">
                                <div class="menu-featured-item__img">
                                    <img src="http://placehold.it/640x388" alt="...">
                                </div>
                                <h5 class="menu-featured-item__heading">
                                    Lorem ipsum dolor
                                </h5>
                                <div class="menu-featured-item__price">
                                    $32
                                </div>
                            </div>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .menu__featured -->

            </div>
        </div>
    </div> <!-- / .container -->
</section>

<!-- Reservation -->
<section class="section_reservation" id="section_reservation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">

                <h3 class="section__heading text-center">
                    Make online reservation
                </h3>
                <p class="reservation__info text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br />Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
                </p>
                <form class="reservation__form">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label class="sr-only" for="reservation__name">Full name</label>
                                <input type="text" class="form-control" id="reservation__name" placeholder="Full name">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="reservation__phone">Phone number</label>
                                <input type="tel" class="form-control" id="reservation__phone" placeholder="Phone number">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="reservation__email">E-mail address</label>
                                <input type="email" class="form-control" id="reservation__email" placeholder="E-mail address">
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label class="sr-only" for="reservation__people">People</label>
                                <select class="form-control" id="reservation__people">
                                    <option value="1">1 people</option>
                                    <option value="2" selected>2 people</option>
                                    <option value="3">3 people</option>
                                    <option value="4">4 people</option>
                                    <option value="5">5 people</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="reservation__date">Date</label>
                                <input type="date" class="form-control" id="reservation__date" value="2016-12-31">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="reservation__time">Time</label>
                                <input type="time" class="form-control" id="reservation__time" value="18:00">
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default">
                            Reserve a table
                        </button>
                    </div>
                </form>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- Events -->
<section class="section_events" id="section_events">

    <!-- Section heading -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="section__heading text-center">
                    Upcoming events
                </h3>
                <p class="text-center">
                    Commodi rem veritatis quis eaque mollitia.
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- Events -->
    <div class="event__items">

        <!-- Event #1 -->
        <div class="event__item active">

            <!-- Bg image -->
            <div class="event-item__bg" style="background-image: url(http://placehold.it/1920x1280)"></div>

            <!-- Content -->
            <div class="container">

                <!-- Content: Big -->
                <div class="event-item__content_big collapse in">
                    <div class="row">
                        <div class="col-sm-8 col-md-5">

                            <time datetime="2016-06-30">
                                June 30, 2016
                            </time>
                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>
                            <p>
                                Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                            </p>
                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_big -->

                <!-- Content: Small -->
                <div class="event-item__content_small collapse">
                    <div class="row">
                        <div class="col-xs-2 col-sm-1">

                            <time datetime="2016-06-30">
                                <span>30</span> June
                            </time>

                        </div>
                        <div class="col-xs-10 col-sm-6">

                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>

                        </div>
                        <div class="col-xs-10 col-xs-offset-2 col-sm-5 text-right">

                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_small -->

            </div> <!-- / .container -->

        </div> <!-- / .event__item -->

        <!-- Event #2 -->
        <div class="event__item">

            <!-- Bg image -->
            <div class="event-item__bg" style="background-image: url(http://placehold.it/1920x1280)"></div>

            <!-- Content -->
            <div class="container">

                <!-- Content: Big -->
                <div class="event-item__content_big collapse">
                    <div class="row">
                        <div class="col-sm-8 col-md-5">

                            <time datetime="2016-07-15">
                                July 15, 2016
                            </time>
                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>
                            <p>
                                Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                            </p>
                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_big -->

                <!-- Content: Small -->
                <div class="event-item__content_small collapse in">
                    <div class="row">
                        <div class="col-xs-2 col-sm-1">

                            <time datetime="2016-07-15">
                                <span>15</span> July
                            </time>

                        </div>
                        <div class="col-xs-10 col-sm-6">

                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>

                        </div>
                        <div class="col-xs-10 col-xs-offset-2 col-sm-5 text-right">

                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_small -->

            </div> <!-- / .container -->

        </div> <!-- / .event__item -->

        <!-- Event #3 -->
        <div class="event__item">

            <!-- Bg image -->
            <div class="event-item__bg" style="background-image: url(http://placehold.it/1920x1280)"></div>

            <!-- Content -->
            <div class="container">

                <!-- Content: Big -->
                <div class="event-item__content_big collapse collapse">
                    <div class="row">
                        <div class="col-sm-8 col-md-5">

                            <time datetime="2016-07-27">
                                July 27, 2016
                            </time>
                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>
                            <p>
                                Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?
                            </p>
                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_big -->

                <!-- Content: Small -->
                <div class="event-item__content_small collapse in">
                    <div class="row">
                        <div class="col-xs-2 col-sm-1">

                            <time datetime="2016-07-27">
                                <span>27</span> July
                            </time>

                        </div>
                        <div class="col-xs-10 col-sm-6">

                            <h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!
                            </h3>

                        </div>
                        <div class="col-xs-10 col-xs-offset-2 col-sm-5 text-right">

                            <a href="#section_reservation" class="btn btn-default">
                                Reserve a table
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .event-item__content_small -->

            </div> <!-- / .container -->

        </div> <!-- / .event__item -->

    </div> <!-- / .event__items -->

</section>

<!-- Gallery -->
<section class="section_gallery" id="section_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="section__heading text-center">
                    Our gallery
                </h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row gallery__grid">
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1274" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1274" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1280x1920" data-lightbox="gallery">
                    <img src="http://placehold.it/1280x1920" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1280" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1270" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1270" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1440" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1440" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1280" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1920x1135" data-lightbox="gallery">
                    <img src="http://placehold.it/1920x1135" class="img-responsive" alt="...">
                </a>
            </div>
            <div class="col-sm-4 gallery__item">
                <a href="http://placehold.it/1500x979" data-lightbox="gallery">
                    <img src="http://placehold.it/1500x979" class="img-responsive" alt="...">
                </a>
            </div>
        </div>
    </div> <!-- / .container -->
</section>

<!-- Newsletter -->
<section class="section_newsletter" id="section_newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">

                <!-- Section heading -->
                <h3 class="section__heading text-center">
                    Newsletter
                </h3>
                <p class="reservation__info text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br />Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
                </p>

                <!-- Newsletter form -->
                <form class="newsletter__form">
                    <div class="row">
                        <div class="form-group col-sm-9">
                            <label for="newsletter__email" class="sr-only">E-mail address</label>
                            <input type="email" class="form-control" id="newsletter__email" placeholder="E-mail address">
                        </div>
                        <button type="submit" class="btn btn-default col-sm-3">
                            Subscribe
                        </button>
                    </div> <!-- / .row -->
                </form>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>