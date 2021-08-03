<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<!-- Mirrored from cooper.mustachethemes.com/1/home2.html index.php  -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <title> <?php  bloginfo('title'); ?> </title>
   <?php wp_head(); ?>

    <!-- Your Styles
    ================================================== -->
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/twitter/jtwt.css" />

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
<body <?php body_class(); ?>>
<div id="main_container" class="clearfix">
    <!--Begin content main-->
    <section class="home home_two" id="content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                        
                        <div class="right_content60 right_content_active">
                            <ul class="info row-fluid field1 info_active">
                                <li class="box span2 offset0 color_one resume">
                                    <h1><a href="<?php bloginfo('url'); ?>/index.php#content"><?php bloginfo('name'); ?></a></h1>

                                    <p><?php bloginfo('description'); ?>
										
                                    </p>
                                    <div class="resume_button btn-sample btn-large">
                            			<a href="<?php bloginfo('url'); ?>/wp-login.php" target="_blank"><span class="icon-white icon-download"></span> رزومه</a>
                                	</div>
                                	<div class="contact_button btn-sample btn-large">
                                    	<a href="<?php bloginfo('url'); ?>/wp-login.php" target="_blank"><span class="icon-white icon-envelope"></span>تماس با من</a>
                                	</div>
                                </li>

                                <li class="box span1 color_tree profile offset0">
                                    <a class="link_profile" href="<?php bloginfo('url'); ?>profile.php">
                                        <span class="sprite sprite-profile-png"></span>
                                        <p class="metro_text">پروفایل</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="info row-fluid field2 info_active">
                                <li class="box span1 offset0 color_two experience ">
                                    <a href="experience.php">
                                        <span class="sprite sprite-loader2-png"></span>
                                        <p class="metro_text">تجربه کاری</p>
                                    </a>

                                </li><li class="box span1 color_four education offset0">
                                <a href="education.php">
                                    <span class="sprite sprite-education-png"></span>
                                    <p class="metro_text">تحصیلات</p>
                                </a>

                            </li><li class="box span1 color_one blog offset0">
                                <a href="blog.php">
                                    <span class="sprite sprite-blog-png"></span>
                                    <p class="metro_text">بلاگ</p>
                                </a>

                            </li>

                            </ul>
                            <ul class="info row-fluid field3 info_active">
                                <li class="box span1 offset0 color_five social">
                                    <a href="#">
                                        <span class="sprite sprite-social-png"></span>
                                        <p class="metro_text">شبکه های اجتماعی</p>
                                    </a>

                                </li>

                                <li class="box span1 color_two contact offset0">
                                    <a href="contact.php">
                                        <span class="sprite sprite-contact-png"></span>
                                        <p class="metro_text">تماس با من</p>
                                    </a>

                                </li><li class="box span1 color_five portfolio offset0">
                                <a href="portfolio.php">
                                    <span class="sprite sprite-portfolio-png"></span>
                                    <p class="metro_text">پورتفولیو</p>
                                </a>

                            </li>
                                <li class="social_box social_hide box span1 offset0 color_six facebook">
                                    <a href="#">
                                        <span class="sprite sprite-facebook-png"></span>
                                        <p class="metro_text">فیسبوک</p>
                                    </a>

                                </li>
                                <li class="social_box social_hide box span1 offset0 color_seven dribble">
                                    <a href="#">
                                        <span class="sprite sprite-dribbing-png"></span>
                                        <p class="metro_text">دریبل</p>
                                    </a>

                                </li>
                                <li class="social_box social_hide box span1 offset0 color_eight twitter">
                                    <a href="#">
                                        <span class="sprite sprite-twitter-png"></span>
                                        <p class="metro_text">توییتر</p>
                                    </a>

                                </li>
                                <li class="social_box social_hide box span1 offset0 color_nine pinterest">
                                    <a href="#">
                                        <span class="sprite sprite-pinterest-png"></span>
                                        <p class="metro_text">پینترست</p>
                                    </a>

                                </li>
                            </ul>
                        </div>
                        
                        
                        <!------------content slider------------->
                        <div class="left_content">
                            <!------------------end carousel bootstrap----------------->
                            <div class="carousel slide" id="myCarousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                                    <li data-slide-to="1" data-target="#myCarousel"></li>
                                    <li data-slide-to="2" data-target="#myCarousel"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item"><img alt="slider image" src="<?php bloginfo('template_directory'); ?>/img/home-slider/1.png"></div>
                                    <div class="item"><img alt="slider image" src="<?php bloginfo('template_directory'); ?>/img/home-slider/2.jpg"></div>
                                    <div class="item"><img alt="slider image" src="<?php bloginfo('template_directory'); ?>/img/home-slider/3.jpg"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                                <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                            </div>
                            <!------------------end carousel bootstrap----------------->
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End begin content main-->
</div>


<!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/js.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.7.1.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>-->
    <!-- Bootstrap.js-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
    <!--fUNCTIONS-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/css/twitter/jquery.jtwt.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-func.js"></script>
<!-- ======================= End JQuery libs =========================== -->
<?php echo date('y'); ?><a href"<?php bloginfo('siteurl'); ?>
</body>

<!-- Mirrored from cooper.mustachethemes.com/1/home2.html by HTTrack Website Copier/3.x [XR&CO'2007], Sat, 14 Dec 2013 11:51:31 GMT -->
</html>