<?php
require_once "ermanager/pages/includes/config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require_once "layouts/head.php";
    ?>
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->

        <!-- Main Header-->
        <?php
        require_once "layouts/header.php";
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/4.jpg);">
            <div class="auto-container">
                <h1>Əlaqə</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="index.html">Ana Səhifə</a></li>
                        <li>Əlaqə</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->

        <!--Map Section-->
        <section class="map-section">
            <!--Map Outer-->
            <div class="map-outer">
                <!--Map Canvas-->
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </section>
        <!--End Map Section-->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="contact-title">
                    <h2>Mesaj yaz</h2>                    
                </div>
                <div class="row clearfix">

                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="http://t.commonsupport.com/nortech/sendemail.php"
                                    id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="firstname" value="" placeholder="Ad"
                                                required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="lastname" value="" placeholder="Soyad"
                                                required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="email" value="" placeholder="Email" required>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Telefon Nömrəsi." required>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" placeholder="Mesaj"></textarea>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="theme-btn btn-style-one">Göndər</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul>
                                <li><span>Ünvan:</span>56, Yusif Seferov, Azerbaijan</li>
                                <li><span>email:</span>info@ecosphere.com</li>
                                <li><span>Telefon nömrəsi:</span>(99455) 123 45 67</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Section-->

        <!--Main Footer-->
        <?php
        require_once "layouts/footer.php";
        ?>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>

    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/script.js"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->

    <!--Color Switcher-->
    <script src="js/color-settings.js"></script>
</body>

</html>