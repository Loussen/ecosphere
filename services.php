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
        <!-- <div class="preloader"></div> -->

        <!-- Main Header-->
        <?php
            require_once "layouts/header.php";
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/4.jpg);">
            <div class="auto-container">
                <h1>Xidmətlərimiz</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="<?=SITE_PATH?>">Ana Səhifə</a></li>
                        <li>Xidmətlərimiz</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->

        <!--Services Page Section-->
        <section class="services-page-section">
            <div class="auto-container">
                <h2 style="padding-bottom: 40px;">Biz müxtəlif xidmətlər təklif edirik</h2>

                <div class="row clearfix">

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="<?=SITE_PATH?>/hvac"><img src="images/resource/service-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="<?=SITE_PATH?>/hvac">HVAC Sistemləri</a></h3>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="<?=SITE_PATH?>/fire-protection"><img src="images/resource/service-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="<?=SITE_PATH?>/fire-protection">Yanğından Mühafizə</a></h3>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
<!--                    <div class="services-block col-md-4 col-sm-6 col-xs-12">-->
<!--                        <div class="inner-box">-->
<!--                            <div class="image">-->
<!--                                <a href="--><?//=SITE_PATH?><!--/management"><img src="images/resource/service-3.jpg" alt="" /></a>-->
<!--                            </div>-->
<!--                            <div class="lower-content">-->
<!--                                <h3><a href="--><?//=SITE_PATH?><!--/management">Layihələndirmə</a></h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="<?=SITE_PATH?>/montaj"><img src="images/resource/service-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="<?=SITE_PATH?>/montaj">Montaj</a></h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--End Services Page Section-->

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
    <script src="js/script.js"></script>

    <!--Color Switcher-->
    <script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from t.commonsupport.com/nortech/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2019 14:18:50 GMT -->

</html>