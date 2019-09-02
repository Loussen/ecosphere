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
                <h1>Montaj</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <?php
                        require_once "layouts/breadcrumb.php";
                        ?>
                        <li>Montaj</li>
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
                                <div class="big-image">
                                    <img src="images/resource/service-11.jpg" alt="" />
                                </div>
                                <h2>Montaj</h2>
                                <div class="text">
                                    <p>İnsanlar demək olar ki vaxtlarının 75%-i müxtəlif kateqoriyalı və təyinatlı
                                        otaqlarda keçirirlər. Bununla belə, çətin ki kimsə normal həyat fəaliyyəti üçün
                                        bizə gündə 20000 litrəcən havanın lazım olduğunu bilir. Otağın təmiz hava, tələb
                                        olunan təmizlik, temperatur və nəmlik göstəriciləri ilə havalandırma sistemi
                                        təmin edir.</p>
                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="content-column col-xs-12">
                                                <div class="inner-column right-padd">
                                                    <h3>Xidmətin üstünlükləri</h3>
                                                    <ul class="list-style-four">
                                                        <li>İş layihəsinin hazırlanması, havalandırmanın quraşdırılması
                                                            ilə bağlı işlərin keçirilməsi üçün otağın hazırlanması
                                                        </li>
                                                        <li>Havalandırma avadanlığının istehsal edilməsi və çatdırılması
                                                        </li>
                                                        <li>Havalandırma sisteminin daxildən və bayırda görülən işlərə
                                                            bölünən montajı
                                                        </li>
                                                        <li>İşəsalma və tənzimləmə işləri, quraşdırılmış havalandırma
                                                            sisteminin işinin tənzimlənməsi
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

</html>