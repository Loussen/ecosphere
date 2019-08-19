<?php
    require_once "ermanager/pages/includes/config.php";

    if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['slug']) && !empty($_GET['slug']))
    {
        $project_id = intval($_GET['id']);
        $project_slug = mysqli_real_escape_string($db,$_GET['slug']);

        // Get news info
        if(!$cache->isCached('project_inner_'.$project_id.$project_slug.$main_lang))
        {
            $stmt_select = mysqli_prepare($db,
                "SELECT
                            `projects`.`auto_id` as `projects_id`,
                            `projects`.`title` as `projects_title`,
                            `projects`.`image_name` as `projects_image_name`,
                            `projects`.`text` as `projects_text`,
                            `projects`.`date` as `projects_date`,
                            `projects`.`customer` as `projects_customer`,
                            `projects`.`category` as `projects_category`,
                            `projects`.`status` as `projects_status`,
                            `projects`.`demo` as `projects_demo`,
                            `projects`.`tags` as `projects_tags`
                            FROM `projects`
                            WHERE `projects`.`lang_id`=(?) and `projects`.`active`=(?) and `projects`.`auto_id`=(?) and `projects`.`title`!=''
                            ");
            $stmt_select->bind_param('iii', $main_lang,$active_status,$project_id);
            $stmt_select->execute();
            $stmt_select->bind_result($current_projects_id,$current_projects_title,$current_projects_image_name,$current_projects_text,$current_projects_date,$current_projects_customer,$current_projects_category,$current_projects_status,$current_projects_demo,$current_projects_tags);
            $stmt_select->fetch();
            $stmt_select->close();

            $cache->store('project_inner_'.$project_id.$project_slug.$main_lang,[
                'current_projects_id'           => $current_projects_id,
                'current_projects_title'        => $current_projects_title,
                'current_projects_image_name'   => $current_projects_image_name,
                'current_projects_text'         => $current_projects_text,
                'current_projects_date'   => $current_projects_date,
                'current_projects_customer'         => $current_projects_customer,
                'current_projects_category'         => $current_projects_category,
                'current_projects_status'         => $current_projects_status,
                'current_projects_demo'         => $current_projects_demo,
                'current_projects_tags'         => $current_projects_tags,
            ],1000);
        }
        else
        {
            $cache_project_inner_result = $cache->retrieve('project_inner_'.$project_id.$project_slug.$main_lang);

            $current_projects_id = $cache_project_inner_result['current_projects_id'];
            $current_projects_title = $cache_project_inner_result['current_projects_title'];
            $current_projects_image_name = $cache_project_inner_result['current_projects_image_name'];
            $current_projects_text = $cache_project_inner_result['current_projects_text'];
            $current_projects_date = $cache_project_inner_result['current_projects_date'];
            $current_projects_customer = $cache_project_inner_result['current_projects_customer'];
            $current_projects_category = $cache_project_inner_result['current_projects_category'];
            $current_projects_status = $cache_project_inner_result['current_projects_status'];
            $current_projects_demo = $cache_project_inner_result['current_projects_demo'];
            $current_projects_tags = $cache_project_inner_result['current_projects_tags'];
        }
    }
    else
    {
        header("Location: ".SITE_PATH."/404");
        exit('Redirecting...');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NorTech - Industries and Factories HTML Template | Project Detail</title>
    <!-- Stylesheets -->
    <link href="<?=SITE_PATH?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?=SITE_PATH?>/css/style.css" rel="stylesheet">
    <link href="<?=SITE_PATH?>/css/responsive.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="<?=SITE_PATH?>/css/color-switcher-design.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="<?=SITE_PATH?>/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?=SITE_PATH?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=SITE_PATH?>/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Main Header-->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <!--Top Left-->
                        <div class="top-left">
                            <ul class="links clearfix">
                                <li><a href="#">+99455 123 45 67</a></li>
                                <li><a href="#"><span class="icon flaticon-note-1"></span>info@ecosphere.com</a></li>
                                <li><a href="#"><span class="icon flaticon-pin"></span>56, Yusif Seferov, Azerbaijan</a>
                                </li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right clearfix">
                            <!--social-icon-->
                            <div class="social-icon">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="<?=SITE_PATH?>/images/logo_eco_dark.png"
                                        style="width: 200px; height: 70px;" alt=""></a></div>
                        </div>

                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">

                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.html">Ana Səhifə</a></li>
                                        <li><a href="about.html">Haqqımızda</a></li>
                                        <li class="dropdown"><a href="#">Xidmətlərimiz</a>
                                            <ul>
                                                <li><a href="services.html">Bütün Xidmətlər</a></li>
                                                <li><a href="hvac.html">HVAC Sistemləri</a></li>
                                                <li><a href="fire-protection.html">Yanğından Mühafizə</a></li>
                                                <li><a href="management.html">Layihələndirmə</a></li>
                                                <li><a href="montaj.html">Montaj</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="projects.html">Proyektlər</a></li>
                                        <li><a href="contact.html">Əlaqə</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->
                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="sticky-inner-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="index.html" class="img-responsive"><img src="<?=SITE_PATH?>/images/logo_eco_small.png" alt=""
                                    title=""></a>
                        </div>

                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.html">Ana Səhifə</a></li>
                                        <li><a href="about.html">Haqqımızda</a></li>
                                        <li class="dropdown"><a href="#">Xidmətlərimiz</a>
                                            <ul>
                                                <li><a href="services.html">Bütün Xidmətlər</a></li>
                                                <li><a href="hvac.html">HVAC Sistemləri</a></li>
                                                <li><a href="fire-protection.html">Yanğından Mühafizə</a></li>
                                                <li><a href="management.html">Layihələndirmə</a></li>
                                                <li><a href="montaj.html">Montaj</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="projects.html">Proyektlər</a></li>
                                        <li><a href="contact.html">Əlaqə</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
                <!--End Sticky Header-->

        </header>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?=SITE_PATH?>/images/background/4.jpg);">
            <div class="auto-container">
                <h1>Projects details</h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Projects details</li>
                    </ul>
                    <div class="text pull-right">Certified Company ISO 9001-2008</div>
                </div>
            </div>
        </div>
        <!--End Page Info-->

        <!--Project Detail Section-->
        <section class="project-detail-section">

            <!--Description Section-->
            <div class="description-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-8 col-sm-12 col-xs-12">
                            <div class="image">
                                <img src="<?=SITE_PATH."/images/projects/".$current_projects_image_name?>" alt="<?=$current_projects_title?>" style="height: 393px;" />
                            </div>
                        </div>
                        <!--Info Column-->
                        <div class="info-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <?php
                                    $month = date("m",$current_projects_date);
                                    $day = date("d",$current_projects_date);
                                    $year = date("Y",$current_projects_date);

                                    $month = getMonth($month,$main_lang);
                                ?>
                                <ul>
                                    <li><span>Customer :</span><?=$current_projects_customer?></li>
                                    <li><span>Category :</span><?=$current_projects_category?></li>
                                    <li><span>Date :</span><?=$day?> <?=$month?>, <?=$year?></li>
                                    <li><span>Status :</span><?=$current_projects_status?></li>
                                    <li><span>Live demo :</span><?=$current_projects_demo?></li>
                                    <li><span>Tags :</span><?=$current_projects_tags?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h2><?=$current_projects_title?></h2>
                    <div class="text">
                        <?=html_entity_decode($current_projects_text)?>
                    </div>
                </div>
            </div>

        </section>
        <!--End Project Detail Section-->

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
                                            <a href="index.html"><img src="<?=SITE_PATH?>/images/logo_eco_footer.png" alt="" /></a>
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

    <script src="<?=SITE_PATH?>/js/jquery.js"></script>
    <script src="<?=SITE_PATH?>/js/bootstrap.min.js"></script>
    <script src="<?=SITE_PATH?>/js/jquery.fancybox.js"></script>

    <script src="<?=SITE_PATH?>/js/owl.js"></script>
    <script src="<?=SITE_PATH?>/js/wow.js"></script>
    <script src="<?=SITE_PATH?>/js/appear.js"></script>
    <script src="<?=SITE_PATH?>/js/script.js"></script>

    <!--Color Switcher-->
    <script src="<?=SITE_PATH?>/js/color-settings.js"></script>
</body>

</html>