<!DOCTYPE html>
<?php  if ( get_post_format() ):
    echo get_post_format();
   #get_template_part( 'template-parts/post/content', get_post_format() );

endif; ?>
<html <?php language_attributes(); ?> class="no-js">

<!-- this page single.php  single.php single.php-->
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
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/twitter/jtwt.css" /> -->


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
<div id="main_container">
<!--Begin this page is single.php-->
    <!--Begin header-->
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
                            			<a href="<?php bloginfo('url'); ?>/wp-login.php"><span class="icon-white icon-download"></span> رزومه</a>
                                	</div>
                                	<div class="contact_button btn-sample btn-large">
                                    	<a href="<?php bloginfo('url'); ?>/wp-login.php"><span class="icon-white icon-info"></span>تماس با من</a>
                                	</div>
                                     <?php print("<p>شما در این صفحه هستید</p>"."<p>". $_SERVER['SCRIPT_NAME']."</p>");  ?>
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
                     <?php
                        if ( is_user_logged_in() ):
    echo 'Welcome, registered user!'. the_user();
else:
    echo 'Welcome, visitor!';
endif; ?>
                        <div class="content_main row-fluid span12">
                           

 <div class="content_center alignright ">
                                <?php if(! have_posts()) :  ?>
                                     <p>
                                        <?php print(get_post_type()); ?>
                                    </p>
                              <?php  $my_query = array('post_type' => 'course','posts_per_page' => 6);
                                     $query1 = new WP_Query($my_query);
                                    while($query1->have_posts()) : $query1->the_post();

                                    ?>
                                     <p>
                                        <?php print(get_post_type()); ?>
                                    </p>
                                    <div class="content_post first">
                                    <h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                   
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
                                </div><?php endwhile; wp_reset_postdata(); 
            endif; ?>
                      <!--  <div class="content_main row-fluid span12"> -->
                            <div class="content_center alignright ">
                            	<?php if(have_posts()) :  setPostViews($postID)?>
			                    <?php while(have_posts()) : the_post() ?>
                                      
                                    <div class="content_post first"> <p>
                                        <?php print(get_post_type()); ?>
                                    </p>
                                	<h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); the_ID ()?></a> </h2>
                                    <h4 style="color: #771474;"><?php echo get_post_format();  ?></h4>
                                    <img class="span1" src="<?php bloginfo('template_url'); ?>/img/blog/1.jpg" alt="//"/>
                                    
                                    <p><?php the_content();?>
                                    </p>
                                    <!--<a class="btn-sample" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a> -->
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین<?php echo getPostViews($postID); ?></a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link();  $postID; ?></a></li>
                                    </ul>
                                </div><?php endwhile;
			endif; ?>
                             

                                <div class="pagination pagination-small pagination-right">
                                	<ul>
                                		
                                		<li><?php next_post_link( '%link', 'Next', TRUE );  ?></li>
                                		<li><?php previous_post_link('%link', 'Prev', TRUE );  ?></li>
                                	
                                		
                                        </ul> 
                                        <section class="section_box">
                                    <h2 class="sub_title">  ابر برچسب ها</h2>
                                    <div class="content_tag"><?php if(get_the_tags()){
            // _e('<span>برچسب ها: </span>','framework'); ?>
                                       
                                        <ul><li> <button class="btn-sample "><?php  the_tags(' ', '<span style="background: #fff;" >&nbsp</span>'); ?> </button></li></ul> <?php } 
             else { _e('برچسب ها: ','framework'); ?>
                   <span><?php _e('برچسبی وجود ندارد ','framework');?> </span> <?php }?></div></section>  
                                    <!-- <ul>
                                        <li><a href="#">&lsaquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">&rsaquo;</a></li>
                                    </ul>  -->
                                </div> 
                            </div>
                           

                        </div>
                        
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