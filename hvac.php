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
                <h1>HVAC Sistemləri</h1>
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
                        <li>HVAC Sistemləri</li>
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
                                <h2>HVAC Sistemləri</h2>
                                <div class="text">
                                    <p>İnsanlar demək olar ki vaxtlarının 75%-i müxtəlif kateqoriyalı və təyinatlı
                                        otaqlarda keçirirlər. Bununla belə, çətin ki kimsə normal həyat fəaliyyəti üçün
                                        bizə gündə 20000 litrəcən havanın lazım olduğunu bilir. Otağın təmiz hava, tələb
                                        olunan təmizlik, temperatur və nəmlik göstəriciləri ilə havalandırma sistemi
                                        təmin edir.</p>

                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <!-- <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="image">
                                                    <img src="images/resource/service-18.jpg" alt="" />
                                                </div>
                                            </div> -->
                                            <div class="content-column col-xs-12">
                                                <div class="inner-column">
                                                    <h3>Xidmətin üstünlükləri</h3>
                                                    <!-- <p>Havalandırma sisteminin qarşısında duran əsas tələblər bunlardır:</p> -->
                                                    <ul class="list-style-four">
                                                        <li>İnsanların normal, rahat həyat fəaliyyəti və tamdəyərli iş
                                                            fəaliyyəti üçün lazım olan oksigen həcminin təmin edilməsi
                                                        </li>
                                                        <li>Emal edilmiş havada olan zərərli və zəhərli qatışıqların və
                                                            maddələrin uzaqlaşdırılması</li>
                                                        <li>Konstruktiv elementlərdə yaranan və binaya ziyan vuran
                                                            nəmliyin götürülməsi</li>
                                                        <li>Tələb olunan təmizliyə nail olmaq üçün havanın müxtəlif
                                                            çirklənmələrdən və qatışıqlardan filtrasiyası</li>
                                                        <li>Tələb olunan temperatur rejimlərinin, hava nəmliyinin
                                                            yaradılması və saxlanılması</li>
                                                        <li>Bayırdan gələn təmiz havanın və otaqdan çəkilən havanın
                                                            arasında istilik rekuperasiyasının hesabına enerjinin
                                                            qorunması</li>
                                                        <li>Havanın dəyişilməsi məqsədilə qapıların və pəncərələrin
                                                            açılmasına ehtiyac olmadığından bunun hesabına otaqda səs
                                                            izolyasiyasının təmin edilməsi</li>
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
                            <div class="sidebar-widget sidebar-blog-category">
                                <ul class="blog-cat">
                                    <li><a href="hvac.html">HVAC Sistemləri</a></li>
                                    <li><a href="fire-protection.html">Yanğından Mühafizə</a></li>
                                    <li><a href="management.html">Layihələndirmə</a></li>
                                    <li><a href="montaj.html">Montaj</a></li>
                                </ul>
                            </div>

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