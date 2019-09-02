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
                <h1>Proyektlər</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="index.html">Ana Səhifə</a></li>
                        <li>Proyektlər</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->

        <!--Project Grid Screen-->
        <section class="project-grid-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <?php
                        // Paginator
                        $limit = 6;

                        $stmt_select = mysqli_prepare($db,
                            "SELECT
                        `auto_id`
                        FROM `projects`
                        WHERE `lang_id`=(?) and `active`=(?)
                        ");
                        $stmt_select->bind_param('ii', $main_lang,$active_status);
                        $stmt_select->execute();
                        $stmt_select->store_result();

                        $count_rows = $stmt_select->num_rows;
                        $max_page=ceil($count_rows/$limit);
                        $page=intval($_GET["page"]); if($page<1) $page=1; if($page>$max_page) $page=$max_page;
                        if($page<1) $page = 1;
                        $start=$page*$limit-$limit;
                        $stmt_select->close();

                        if(!$cache->isCached('result_projects_'.$page.$main_lang))
                        {
                            // Get news by category
                            $stmt_select = mysqli_prepare($db,
                                "SELECT
                        *
                        FROM `projects`
                        WHERE `lang_id`=(?) and `active`=(?)
                        order by `created_at` desc limit $start,$limit");

                            $stmt_select->bind_param('ii', $main_lang,$active_status);
                            $stmt_select->execute();
                            $result_projects = $stmt_select->get_result();
                            $stmt_select->close();

                            $result_projects_arr = [];
                            while($row=$result_projects->fetch_assoc())
                            {
                                $result_projects_arr[] = $row;
                            }

                            $cache->store('result_projects_'.$page.$main_lang,$result_projects_arr, 300);
                        }
                        else
                        {
                            $result_projects_arr = $cache->retrieve('result_projects_'.$page.$main_lang);
                        }

                        foreach ($result_projects_arr as $item)
                        {
                            ?>
                            <!--Gallery Item-->
                            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="<?=SITE_PATH?>/images/projects/<?=$item['image_name']?>" alt="<?=$item['title']?>" style="height: 270px;">
                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <a href="<?=SITE_PATH."/project/".slugGenerator($item['title'])."-".$item['auto_id']?>" class="link"><span class="icon flaticon-unlink"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <h3><a href="<?=SITE_PATH."/project/".slugGenerator($item['title'])."-".$item['auto_id']?>"><?=$item['title']?></a></h3>
<!--                                    <div class="text">Mechanical Engineering</div>-->
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!--End Project Grid Screen-->

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