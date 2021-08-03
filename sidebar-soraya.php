<?php
/*
* The sidebar for ssoraya page
 *
 * This is the soraya template az a child mahan template that displays all
*/

?>
<!-- Mirrored from  sidebar-soraya.php  -->
 <div class="content_left_bar alignright ">
     <input class="search_input" type="text" placeholder="جستجو در سایت ...">
        <section class="section_box">
           <h2 class="sub_title"> نوشته ها بر اساس</h2>
           <ul class="nav nav-tabs">
                <li class="active"><a href="#popular" data-toggle="tab">محبوبیت</a></li>
                <li><a href="#recent" data-toggle="tab">جدیدترین</a></li>
                <li><a href="#comments" data-toggle="tab">تصادفی</a></li>
           </ul>
           <div class="tab-content">
              <div class="tab-pane active" id="popular">
                  <?php 
                        $popularpost = new WP_Query(array( 
                                'posts_per_page' => 5, 
                                'meta_key' => 'post_views_count', 
                                'orderby' => 'meta_value_num', 
                                'order' => 'DESC'  
                             ));
 
                   while ( $popularpost->have_posts() ) : $popularpost->the_post();
                       echo '<li class="console first"><p><a href="',the_permalink(),'">'the_title(),the_post_thumbnail(),'</a>';
                       echo ' تعداد بازدید: ',getPostViews(get_the_ID()),'</p>';
                       echo ' <h6><span class="icon-calendar"></span>','تاریخ: ',the_time('y/m/d'),'</h6></li>';
                   endwhile;
                 ?>
              </div>
                                        <div class="tab-pane" id="recent" name="recent">
                                            
                                            <?php 
                                                $popularpost = new WP_Query(array( 
                                                               'posts_per_page' => 3, 
                                                                  'meta_key' => 'post_views_count', 
                                                               'orderby' => 'meta_value_num', 
                                                                'order' => 'DESC'  
                                                                 ));
 
                                                            while ( $popularpost->have_posts() ) : $popularpost->the_post();
                                                             echo '<li class="console first"><p><a class="content_img  href="',the_permalink(),'">',the_title(),the_post_thumbnail(),'</a>';
                                                             echo ' تعداد بازدید: ',getPostViews(get_the_ID()),'</p>';
                                                             echo ' <h6><span class="icon-calendar"></span>',the_time('y/m/d'),'</h6></li>';
                                                               endwhile;
                                                                ?>
                                           
                                           
                                        </div>
                                        <div class="tab-pane" id="comments">
                                        	<?php 
                        $popularpost = new WP_Query(array( 
                                'posts_per_page' => 5, 
                                'meta_key' => 'post_views_count', 
                                'orderby' => 'meta_value_num', 
                                'order' => 'DESC'  
                             ));
 
                   while ( $popularpost->have_posts() ) : $popularpost->the_post();
                       echo '<li class="console first"><p><a href="',the_permalink(),'">',the_title(),the_post_thumbnail(),'</a>';
                       echo ' تعداد بازدید: ',getPostViews(get_the_ID()),'</p>';
                       echo ' <h6><span class="icon-calendar"></span>','تاریخ: ',the_time('y/m/d'),'</h6></li>';
                   endwhile;
                 ?>
                                           <!-- <ul>
                                                <li class="console first">
                                                    <div class="content_img"><img src="img/blog/thumbnail-1.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                <li class="console">
                                                    <div class="content_img"><img src="img/blog/thumbnail-3.jpg" alt="//"/></div>
                                                     <p><a class="video-link" href="#">استفاده از ویدئو به عنوان محتوای چند رسانه ای در نوشته</a></p>
                                                    <h6><i class="icon-calendar"></i>12 اردیبهشت 1393</h6>
                                                </li>
                                                
                                            </ul> -->
                                        </div>

                                    </div>
                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  ابر برچسب ها</h2>
                                    <div class="content_tag"><?php if(get_the_tags(get_the_ID())){
             _e('برچسب ها: ','framework'); ?>
                                       
                                        <ul><li> <button class="btn-sample "><?php  the_tags('', ' , '); ?> </button></li></ul> <?php } 
             else { _e('برچسب ها: ','framework'); ?>
                   <span><?php _e('برچسبی وجود ندارد ','framework');?> </span> <?php }?>
                                     
                                       <ul>
                                            <li>
                                                <button class="btn-sample ">طراحی وب</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">عکاسی</button>
                                            </li>
                                            <li><button class="btn-sample"><?php $postid = get_the_title(); echo $postid; ?></button></li>
                                          </ul>
                                            <!-- <li>
                                                <button class="btn-sample">لوگو</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">Themeforest</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">برند</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">طراحی</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">مردم</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">هنر</button>
                                            </li>
                                            <li>
                                                <button class="btn-sample">واکنش گرایی</button>
                                            </li>
                                        </ul> -->
                                    </div>
                                </section>
                                <section class="section_box">
                                   <h2 class="sub_title">  ابزارک متنی</h2>
                                    <div class="content_widget">
                                        <p>چند خط نوشته آزمایشی برای پر کردن ابزارک متنی. در اینجا میتوانید نوشته ی دلخواه خود را قرار دهید و آن را با هر چیزی که مایل هستید پر کنید.
                                        </p>
                                    </div>
                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  نوشته های اخیر</h2>
                                    <?php wp_nav_menu(array('theme_location'=>'top-menu'));  ?>
                                </section>
                                <section class="section_box">
                                    <h2 class="sub_title">  دسته بندی ها</h2>
                                    <?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('sidebar')); ?>
    <?php endifif; ?>
                                    <!--<div class="content_categories">
                                        <button class="btn-sample active">عکاسی و هنر</button>
                                        <button class="btn-sample ">معماری</button>
                                        <button class="btn-sample ">طراحی و توسعه وب</button>
                                    </div> -->

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
                                    <?php wp_nav_menu(array('theme_location'=>'main-menu'));  ?>
                                    <div id="twitter"></div>
                                </section>

                            </div>
