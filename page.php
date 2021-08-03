<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<!-- Mirrored from cooper.mustachethemes.com/1/home2.html dppage.php  -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <title> <?php  bloginfo('title'); ?> </title>
   <?php wp_head(); ?>

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
                                <li class="menu_item"><?php wp_nav_menu(array('theme_location'=>'top-menu'));  ?></li>
                                <li class="menu_item"><a href="education.php">تحصیلات </a></li>
                                <li class="menu_item"><a href="portfolio.php">پورتفولیو </a></li>
                                <li class="menu_item"><a href="experience.php">تجربه کاری </a></li>
                                <li class="menu_item"><a href="<?php bloginfo('url'); ?>/?p=52">بلاگ </a></li>
                                
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

                                    <div class="content_post first">
                                	<h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php echo $post->ID ; the_title(); ?></a> </h2>
                                    <img class="span1" src="<?php bloginfo('template_url'); ?>/img/blog/1.jpg" alt="//"/>
                                          <?php the_post_thumbnail(); ?>
                                    <p><?php the_content();?>
                                    </p>
                                   <!-- <a class="btn-sample" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a> -->
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین</a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link(); ?></a></li>
                                    </ul>
                                </div><?php endwhile;
			endif; ?>
                             
                                <!--<div class="pagination pagination-small pagination-right">
                                    
                                    <ul>
                                        <li><a href="#">&lsaquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">&rsaquo;</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="content_left_bar alignright ">
                                <input class="search_input" type="text" placeholder="جستجو در سایت ...">
                                <section class="section_box">
                                
                                    <h2 class="sub_title"> ارسالهای بلاگ</h2>
                                     <?php wp_nav_menu(array('theme_location'=>'top-menu'));  ?>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#popular" data-toggle="tab">محبوب</a></li>
                                        <li><a href="#recent" data-toggle="tab">جدید</a></li>
                                        <li><a href="#comments" data-toggle="tab">نظرات</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popular">
                                            <ul>
                                                <li class="console first">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-1.jpg" alt="//"/></div>
                                                    <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-2.jpg" alt="//"/></div>
                                                    <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-3.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console last">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-4.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="recent">
                                            <ul>
                                                <li class="console first">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-1.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-2.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-3.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console last">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-4.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="comments">
                                            <ul>
                                                <li class="console first">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-1.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-3.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-2.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console last">
                                                    <div class="content_img"><img src="<?php bloginfo('template_url'); ?>/img/blog/thumbnail-4.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </section>
                                <!--<section class="section_box">
                                    <h2 class="sub_title">  ابر برچسب ها</h2>
                                    <div class="content_tag"><?php if(get_the_tags()){
             _e('برچسب ها: ','framework'); ?>
                                       
                                        <ul><li> <button class="btn-sample "><?php  the_tags('', ' , '); ?> </button></li></ul> <?php } 
             else { _e('برچسب ها: ','framework'); ?>
                   <span><?php _e('برچسبی وجود ندارد ','framework');?> </span> <?php }?>
                                     
                                      
                                    </div>
                                </section> -->
                                <section class="section_box">
                                   <h2 class="sub_title">  ابزارک متنی</h2>
                                    <div class="content_widget">
                                        <p>چند خط نوشته آزمایشی برای پر کردن ابزارک متنی. در اینجا میتوانید نوشته ی دلخواه خود را قرار دهید و آن را با هر چیزی که مایل هستید پر کنید.
                                        </p>
                                    </div>
                                </section>
                                <section class="section_box">
                                   	<h2 class="sub_title">  نوشته های اخیر</h2>
                                    <ul class="recent_post">
                                        <li>
                                            <a href="#">&rsaquo; عنوان آزمایشی شماره 1</a>
                                        </li>
                                        <li>
                                            <a href="#">&rsaquo; عنوان آزمایشی شماره دو.</a>
                                        </li>
                                        <li>
                                            <a href="#">&rsaquo; عنوان آزمایشی شماره سه.</a>
                                        </li>
                                        <li>
                                            <a href="#">&rsaquo; یک عنوان آزمایشی دیگر با شماره چهار در اینجا!</a>
                                        </li>
                                    </ul>
                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  دسته بندی ها</h2>
                                    <div class="content_categories">
                                        <button class="btn-sample active">عکاسی و هنر</button>
                                        <button class="btn-sample ">معماری</button>
                                        <button class="btn-sample ">طراحی و توسعه وب</button>
                                    </div>

                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  ابزارک آکاردئونی</h2>
                                    <div class="accordion" id="accordion2">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle open" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                    <i class="icon-minus"></i>عنوان دلخواه در اینجا قرار میگیرد
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    <p>
                                                        یک نوشته آزمایشی به عنوان محتوای این ارسال در اینجا قرار گرفته است . شما میتوانید اینجا را با نوشته های دلخواه خود پر کنید و آن را به شکل مورد نظرتان در بیاورید.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                                    <i class="icon-plus"></i>عنوان دلخواه در اینجا قرار میگیرد
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>
                                                        یک نوشته آزمایشی به عنوان محتوای این ارسال در اینجا قرار گرفته است . شما میتوانید اینجا را با نوشته های دلخواه خود پر کنید و آن را به شکل مورد نظرتان در بیاورید.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                                    <i class="icon-plus"></i>عنوان دلخواه در اینجا قرار میگیرد
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>
                                                        یک نوشته آزمایشی به عنوان محتوای این ارسال در اینجا قرار گرفته است . شما میتوانید اینجا را با نوشته های دلخواه خود پر کنید و آن را به شکل مورد نظرتان در بیاورید.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                                    <i class="icon-plus"></i>عنوان دلخواه در اینجا قرار میگیرد
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>
                                                        یک نوشته آزمایشی به عنوان محتوای این ارسال در اینجا قرار گرفته است . شما میتوانید اینجا را با نوشته های دلخواه خود پر کنید و آن را به شکل مورد نظرتان در بیاورید.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  توییتر در اینجا!</h2>
                                    <div id="twitter"></div>
                                </section>

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