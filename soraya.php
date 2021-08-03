<?php
/*
Template Name: soraya
*/
?>

 <?php get_header('soraya') ?>

<body <?php body_class(); ?>>
<div id="main_container">
    <!--Begin  soraya.php-->
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
									<?php if ( is_user_logged_in() ):
                                                print("<p>عضو محترم خوش آمدید</p>");
                                          else:
                                                print("<p>مخاطب محترم خوش آمدید</p>");
                                          endif;
									?>
									 
                                    <?php # print("<p>شما در این صفحه هستید</p>");  ?>
                                   <?php  
                                   #$uri = $_SERVER['REQUEST_URI'];
                                  # print_r("<P>".$uri."</p>"); ?>
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
                    <p dir="ltr"></p>
                        
                        <div class="content_main row-fluid span12">

                            <div class="content_center alignleft "><?php if ( is_single() ) : ?>
        <h1 class="entry-title"><?php the_title(); ?><span>single page</span></h1>
        <?php
  $time = date("H");    echo $time."</br>";
  $t=5+$time;
  if ($time < "10") :   
    echo "Good morning, chum!";
    $t=3+$time;
    echo $t;
   else :      
    echo "Good day, bud!";
    echo "<br>". $t;
  endif
?>
    
        <h1 class="entry-title">
            <a href="<?php get_the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
            <a href="<?php the_permalink(); ?>">This is a page</a>
        <?php endif; // is_single() ?>
                                <?php if(have_posts()) :  setPostViews($postID)?>
                                <?php while(have_posts()) : the_post() ?>

                                    <div class="content_post first">
                                   <!-- <h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>  -->
                                    <img class="span1" src="<?php bloginfo('template_url'); ?>/img/blog/manac.png" alt="<?php echo  bloginfo('title');?>" />
                                    <a href="<?php the_permalink(); ?>">This is a llink</a>

                                    <p><?php the_content();?>
                                    </p>
                                    <!--<a class="btn-sample" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a> -->
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین<?php echo get_post_type(); ?></a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link();  $postID; ?></a></li>
                                    </ul>
                                </div><?php endwhile;
            endif; ?>
            <?php print("<p>شما در این صفحه هستید</p>"."<p>". $_SERVER['SCRIPT_NAME']."</p>");  ?>
			
        </div>
        

<?php /* get_sidebar('soraya');*/ ?>
<?php include_once('custom-search.php') ?>
 <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

<?php get_footer('soraya'); ?>
