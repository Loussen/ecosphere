<?php
    require_once "ermanager/pages/includes/config.php";

    if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['slug']) && !empty($_GET['slug']))
    {
        $project_id = intval($_GET['id']);
        $project_slug = mysqli_real_escape_string($db,$_GET['slug']);

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
        <section class="page-title" style="background-image:url(<?=SITE_PATH?>/images/background/4.jpg);">
            <div class="auto-container">
                <h1><?=$current_projects_title?></h1>
            </div>

        </section>
        <!--End Page Title-->

        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb pull-left">
                        <li><a href="<?=SITE_PATH?>">Ana Səhifə</a></li>
                        <li>Referansın detalları</li>
                    </ul>
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
                                    <li><span>Sifarişçi :</span><?=$current_projects_customer?></li>
                                    <li><span>Yer :</span><?=$current_projects_demo?></li>
                                    <li><span>Kateqoriya :</span><?=$current_projects_category?></li>
                                    <li><span>Tikinti sahəsi M<sup>2</sup> :</span><?=$current_projects_tags?></li>
                                    <li><span>Tarix :</span><?=$day?> <?=$month?>, <?=$year?></li>
                                    <li><span>Status :</span><?=$current_projects_status?></li>                                                                       
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h2>Referansın təsviri</h2>
                    <div class="text">
                        <?=html_entity_decode($current_projects_text)?>
                    </div>
                </div>
            </div>

        </section>
        <!--End Project Detail Section-->

        <!--Main Footer-->
        <?php
        require_once "layouts/footer.php";
        ?>

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