<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li><a href="tel:<?=$contact_config['phone']?>"><?=$contact_config['phone']?></a></li>
                        <li><a href="mailto:<?=$contact_config['email']?>"><span class="icon flaticon-note-1"></span><?=$contact_config['email']?></a></li>
                        <li><a href="#"><span class="icon flaticon-pin"></span><?=$contact_config['address']?></a>
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
                    <div class="logo"><a href="<?=SITE_PATH?>"><img src="<?=SITE_PATH?>/images/logo_eco_dark.png" style="width: 200px; height: 70px;" alt="Ecosphere"></a></div>
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
                                <li><a href="<?=SITE_PATH?>">Ana Səhifə</a></li>
                                <li><a href="<?=SITE_PATH?>/about">Haqqımızda</a></li>
                                <li><a href="<?=SITE_PATH?>/management">Layihələndirmə</a></li>
                                <li class="dropdown"><a href="#">Xidmətlərimiz</a>
                                    <ul>
                                        <li><a href="<?=SITE_PATH?>/services">Bütün Xidmətlər</a></li>
                                        <li><a href="<?=SITE_PATH?>/hvac">HVAC Sistemləri</a></li>
                                        <li><a href="<?=SITE_PATH?>/fire-protection">Yanğından Mühafizə</a></li>                                        
                                        <li><a href="<?=SITE_PATH?>/montaj">Montaj</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=SITE_PATH?>/projects">Referanslar</a></li>
                                <li><a href="<?=SITE_PATH?>/contact">Əlaqə</a></li>
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
                    <a href="<?=SITE_PATH?>" class="img-responsive"><img src="<?=SITE_PATH?>/images/logo_eco_small.png" alt="Ecosphere"
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
                                <li><a href="<?=SITE_PATH?>">Ana Səhifə</a></li>
                                <li><a href="<?=SITE_PATH?>/about">Haqqımızda</a></li>
                                <li><a href="<?=SITE_PATH?>/management">Layihələndirmə</a></li>
                                <li class="dropdown"><a href="#">Xidmətlərimiz</a>
                                    <ul>
                                        <li><a href="<?=SITE_PATH?>/services">Bütün Xidmətlər</a></li>
                                        <li><a href="<?=SITE_PATH?>/hvac">HVAC Sistemləri</a></li>
                                        <li><a href="<?=SITE_PATH?>/fire-protection">Yanğından Mühafizə</a></li>                                      
                                        <li><a href="<?=SITE_PATH?>/montaj">Montaj</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=SITE_PATH?>/projects">Referanslar</a></li>
                                <li><a href="<?=SITE_PATH?>/contact">Əlaqə</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

</header>