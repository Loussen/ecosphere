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
                        <li><a href="index.html">Ana Səhifə</a></li>
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
                                <a href="hvac.html"><img src="images/resource/service-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="hvac.html">HVAC Sistemləri</a></h3>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="fire-protection.html"><img src="images/resource/service-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="fire-protection.html">Yanğından Mühafizə</a></h3>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="management.html"><img src="images/resource/service-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="management.html">Layihələndirmə</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="montaj.html"><img src="images/resource/service-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="montaj.html">Montaj</a></h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--End Services Page Section-->

        <!--Main Footer-->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/logo_eco_footer.png" alt="" /></a>
                                        </div>
                                        <div class="text">8 ildən artıq müddətdə fəaliyyetimizin bizə qazandırdığı
                                            təcrübə, sahəsinin peşəkarı olan işçi kollektivimiz və gördüyümüz işlərin
                                            keyfiyyətinə zəmanətlə sizin xidmətinizdəyik.</div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Quick Links</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Testimonials</a></li>
                                                <li><a href="#">Request Call Back</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Xidmətlərimiz</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">HVAC Sistemləri</a></li>
                                                <li><a href="#">Yanğından Mühafizə</a></li>
                                                <li><a href="#">Layihələndirmə</a></li>
                                                <li><a href="#">Montaj</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget info-widget">
                                        <h2>Əlaqə</h2>
                                        <div class="widget-content">
                                            <div class="number">(99455) 123 45 67</div>
                                            <div class="text">56, Yusif Seferov, Azerbaijan ecosphere@contact.gmail.com
                                            </div>
                                            <ul class="social-icon-one">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="clearfix">
                        <div class="centered">
                            <div class="copyright">&copy; Copyright Ecosphere 2019. All right reserved.</div>
                        </div>
                    </div>
                </div>

            </div>

        </footer>

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