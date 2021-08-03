<?php
/**
 * The template for displaying posts in the standard post format
 *
 * @package WordPress
 * @subpackage mahan
 * @since mahan 1.0
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<!-- this page temlpate-parts/post/CONTENT.php -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <title> <?php  bloginfo('title'); ?> </title>
    
   <?php wp_head(); ?>

    <!-- Your Styles
    ================================================== -->
    <!-- Your Styles
    ================================================== -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/twitter/jtwt.css" />
    <link rel="stylesheet" type="text/css" id="sara-style-css" href="<?php echo  get_stylesheet_directory_uri() ; ?>/style.css " media="all"/>  -->


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon"  href="<?php bloginfo('template_directory'); ?>/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon"  href="<?php bloginfo('template_directory'); ?>/img/icons/apple-touch-icon-114x114.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/font-awesome-ie7.css">
    <![endif]-->

    <!-- styles for IE -->

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen"/>
    <![endif]-->
    <!--[if IE 7 ]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
    <!--End begin header-->
    <style type="text/css">
.blog .content_center .content_post.first{
    border-right: solid 2px #f3d9d9;
    border-radius:20px;
}
</style>
<body <?php body_class(); ?>>
<div id="main_container">
    <!--Begin single-course.php-->
    <header>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="content_menu wrap">
                        <div class="box span2 offset0 color_one resume">
                             <h1><a href="<?php bloginfo('url'); ?>/index.php#content"><?php bloginfo('name'); ?></a></h1>

                                    <p><?php bloginfo('description'); ?>
                                        
                                    </p>
                                     <div class="resume_button btn-sample btn-large">
                                        <a href="<?php bloginfo('url'); ?>/wp-login.php" target="_blank"><span class="icon-white icon-download"></span> رزومه</a>
                                    </div>
                                    <div class="contact_button btn-sample btn-large">
                                        <a href="<?php bloginfo('url'); ?>/wp-login.php" target="_blank"><span class="icon-white icon-info"></span>تماس با من</a>
                                    </div>
                        </div>
                        <!-------------content menu---------------------------->
                        <nav class="navbar span3">
                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                 <ul class="nav">
                                 <li class="menu_item"><a href="<?php echo get_settings('home'); ?>">خانه</a></li>
                                 <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=2">مستندات </a></li>
                                <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=11">کامپیوتر </a></li>
                               <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=4">هواپیمایی</a></li>
                                <li class="menu_item"><a  alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url'); ?>/?m=2016">بلاگ </a></li>
                                <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url'); ?>/?cat=3">تماس با من </a></li>
                            </ul>
                            </div>

                        </nav>
                        <!-------------end content menu------------------------>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End begin header-->
    <!--Begin content main-->
    <section id="content" class="blog">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                    
                        
                        <div class="content_main row-fluid span12">

                            <div class="content_center alignleft ">
                                <?php if(have_posts()) :  ?>
                                <?php while(have_posts()) : the_post() ?>

                                    <div class="content_post first" style="border-right-color:<?php bcg_body();?>">
                                    <h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                    <p><?php echo get_post_type(); ?></p>
                                    <?php the_post_thumbnail(); ?>
                                    <p><?php the_excerpt();?>
                                    </p>
                                    <a class="btn-sample" alt="<?php the_title(); ?>" target="_blank" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a>
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین</a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link(); ?></a></li>
                                    </ul>
                                </div><?php endwhile;
            endif; ?>
             
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End begin content main-->

    <!--Begin footer-->
    <footer>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                        <div class="content_footer span12">
                            <hr>
                            <div class="span2">
                                2015 My Online Resume. All rights reserved
                                <p>
                                ویرایش و پارسی سازی توسط <a href="http://mahantec.tk" title="Mahan technique" alt="Mahan technique" target="">Mahan technique</a>
                                </p>
                            </div>
                            <div class="span3 offset0">
                                <ul class="social-circled">
                                    <li class="color_ten social">
                                        <a class="icon-gplus-circled" href="#googleplus"></a>
                                    </li>
                                    <li class=" color_ten social ">
                                        <a class="icon-pinterest-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-twitter-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-linkedin-circled " href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-facebook-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-skype-circled" href="#googleplus"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!--End begin footer-->
</div>

<!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
  <!--  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.1.js"></script> -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>-->
    <!-- Bootstrap.js-->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <!--fUNCTIONS-->
   <!-- <script src="<?php bloginfo('template_url'); ?>/js/js.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/css/twitter/jquery.jtwt.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/filter/quiksand.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-func.js"></script> -->
<!-- ======================= End JQuery libs =========================== -->


</body>
</html>