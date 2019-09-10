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
                                    <a href="<?=SITE_PATH?>"><img src="<?=SITE_PATH?>/images/logo_eco_footer.png" alt="Ecosphere" /></a>
                                </div>
                                <div class="text"><?=nl2br($contact_config['footer'])?></div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Qısa Yollar</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="<?=SITE_PATH?>">Ana səhifə</a></li>
                                        <li><a href="<?=SITE_PATH?>/about">Haqqımızda</a></li>
                                        <li><a href="<?=SITE_PATH?>/services">Xidmətlər</a></li>
                                        <li><a href="<?=SITE_PATH?>/projects">Proyektlər</a></li>
                                        <li><a href="<?=SITE_PATH?>/contact">Əlaqə</a></li>
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
                                        <li><a href="<?=SITE_PATH?>/hvac">HVAC Sistemləri</a></li>
                                        <li><a href="<?=SITE_PATH?>/fire-protection">Yanğından Mühafizə</a></li>
                                        <li><a href="<?=SITE_PATH?>/montaj">Montaj</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget info-widget">
                                <h2>Əlaqə</h2>
                                <div class="widget-content">
                                    <div class="number"><?=$contact_config['phone']?></div>
                                    <div class="text"><?=$contact_config['address']?> <?=$contact_config['email']?>
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