<?php
$site = Yii::$app->view->params['site'];
?>

<!-- Footer -->
<footer class="footer">

    <!-- Footer info -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <!-- About Us -->
                <h5 class="footer__heading">
                    About Us
                </h5>
                <p>
                    <?= $site->about_us ?>
                </p>

            </div>
            <div class="col-sm-4">

                <!-- Contact info -->
                <h5 class="footer__heading">
                    Contact info
                </h5>
                <ul class="footer__info">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <?= $site->address ?>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <?= $site->phone ?>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:<?= $site->email ?>"><?= $site->email ?></a>
                    </li>
                </ul>

            </div>
            <div class="col-sm-4">

                <!-- Opening hours -->
                <h5 class="footer__heading">
                    Opening hours
                </h5>
                <div class="footer__open">
                    <div class="footer-open__days">Monday - Thursday</div>
                    <div class="footer-open__time">10:00 AM - 11:00 PM</div>
                </div>
                <div class="footer__open">
                    <div class="footer-open__days">Friday - Sunday</div>
                    <div class="footer-open__time">12:00 AM - 03:00 AM</div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-12">

                <!-- Copyright -->
                <div class="footer__copyright">
                    <span></span> <i class="fa fa-copyright"></i> 2016 Touché. All rights reserved.
                </div>

            </div>
        </div>
    </div> <!-- / .container -->

</footer>