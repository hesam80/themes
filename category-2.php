<?php get_header('soraya') ?>
<style type="text/css">
.blog .content_center .content_post.first{
    border-right: solid 2px #f3d9d9;
    border-radius:20px;
}
</style>
<body <?php body_class(); ?>>
<div id="main_container">
    <!--Begincategory-2.php-->
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
                        <?php get_template_part( 'template-parts/header/poolmool', 'header' ); ?>
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
                                	<h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                   
                                    <?php //the_post_thumbnail(); ?>
                                    <p><?php the_excerpt(); ?>
                                   
                                    </p>
                                    <p>
                                    	<?php print(get_post_type()); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"alt="<?php the_title(); ?>" target="_blank"><span class="icon-comment"></span>&nbsp Link For Share</a>
                                    <a class="btn-sample" alt="<?php the_title(); ?>" target="_blank" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a>
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین</a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link(); ?></a></li>
                                    </ul>
                                </div><?php endwhile;
			endif; ?>
                              

                                <div class="pagination pagination-small pagination-right">
                                 
                                </div>
                            </div>
                           <?php  get_sidebar();  ?>

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