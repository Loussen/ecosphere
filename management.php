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

        <!-- Main Header-->
        <?php
        require_once "layouts/header.php";
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/4.jpg);">
            <div class="auto-container">
                <h1>Layihələndirmə</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="index.html">Ana Səhifə</a></li>
                        <li><a href="services.html">Xidmətlərimiz</a></li>
                        <li>Layihələndirmə</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->


        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="services-single">
                            <div class="inner-box">
                                <div class="gallery-image">
                                    <div class="row clearfix">
                                        <div class="image-column col-md-7 col-sm-7 col-xs-12">
                                            <div class="image">
                                                <img src="images/resource/service-16.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                            <div class="image">
                                                <img src="images/resource/service-17.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Layihələndirmə</h2>
                                <div class="text">
                                    <p>İnsanlar demək olar ki vaxtlarının 75%-i müxtəlif kateqoriyalı və təyinatlı
                                        otaqlarda keçirirlər. Bununla belə, çətin ki kimsə normal həyat fəaliyyəti üçün
                                        bizə gündə 20000 litrəcən havanın lazım olduğunu bilir. Otağın təmiz hava, tələb
                                        olunan təmizlik, temperatur və nəmlik göstəriciləri ilə havalandırma sistemi
                                        təmin edir.</p>

                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="content-column col-xs-12">
                                                <div class="inner-column">
                                                    <h3>Xidmətin üstünlükləri</h3>

                                                    <ul class="list-style-four">
                                                        <li>konsepsiyanın hazırlanması
                                                        </li>
                                                        <li>layihə sənədləşdirməsinin hazırlanması
                                                        </li>                                                      
                                                        <li>avadanlığın təchizatı
                                                        </li>
                                                        <li>avadanlığın işəsalma və tənzimləməsi, proqramlaşdırılması
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar">

                            <!--Blog Category Widget-->
                            <?php
                            require_once "layouts/left.php";
                            ?>

                            <!--Contact Widhet-->
                            <div class="sidebar-widget contact-info-widget">
                                <div class="sidebar-title style-two">
                                    <h2>Our Brochures</h2>
                                </div>
                                <div class="inner-box">
                                    <ul>
                                        <li><span class="icon fa fa-phone"></span>+994 123 45 67</li>
                                        <li><span class="icon fa fa-send"></span>info@ecosphere.com</li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </div>

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

<!-- Mirrored from t.commonsupport.com/nortech/material-engineering.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2019 14:19:16 GMT -->

</html>