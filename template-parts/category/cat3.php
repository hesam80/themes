<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mahan
 * @since 1.0
 * @version 1.0
 */

?>
<div id="main_container">
    <!--Begin cat4.php-->
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