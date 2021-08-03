<?php
/**
 * Displays header codes
 *
 * @package WordPress
 * @subpackage mahan
 * @since 1.0
 * @version 1.0
 */

?>
<!------------poolmool-header.php------------------------>
<nav class="navbar span3">
                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                 <ul class="nav">
                                 <li class="menu_item"><a href="<?php echo get_settings('home'); ?>">خانه</a></li>
                                 <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=2">بیت کوین</a></li>
                                <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=11">کامپیوتر </a></li>
                               <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url');?>/?cat=4">ثبت نام</a></li>
                                <li class="menu_item"><a  alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url'); ?>/?m=2016">آموزش  </a></li>
                                <li class="menu_item"><a alt="<?php the_title(); ?>" target="_blank" href="<?php bloginfo('url'); ?>/?cat=3">تماس با من </a></li>
                            </ul>
                            </div>

                        </nav>
