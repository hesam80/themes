<?php
/*
Template Name: sara
*/

?>
<?php get_header('sara') ;
global $post;
?>
<!-- Az inja dar page  sara.php  -->
<body <?php body_class(); ?>>
  <div id='main_container'>	
	<div class="saraboxx">
	  <?php echo "<h2>"; bloginfo('title'); echo "</h2>" ?>
	  <?php echo "<h5>"; bloginfo('description'); echo "</h5>" ?>

      <div id="navmenu">
        <ul>
           <li><a href="<?php echo get_settings('home'); ?>">HOME</a></li>
           <?php wp_list_categories('orderby=name&include=3,4,5'); ?>
           <li><a href="http://www.wordpress.org">WORDPRESS</a></li>
       </ul>
      </div>
   </div>                     
           
   <nav>
  	 <ul>
          <li><a href="#">wp</a></li>
          <li><a href="#">wp-1</a></li>
          <li><a href="#">wp-2</a>
   	          <ul>
   	          	 <li><a href="#">وردپرس</a></li>
                 <li><a href="#">جوملا</a></li>
   	          </ul>
         </li>
  </ul>
  </nav>

     <style type="text/css">
               .sys{
                width:400px; height:auto; margin:auto; padding: 20px; border-radius: 5px;
                 
                 background: #ffef40  0 0 no-repeat;
    background-repeat:no-repeat;
    
    background:-webkit-linear-gradient(#ffef40, #eee);
    background:-moz-linear-gradient(#ffef40, #eee);
    background:-o-linear-gradient(#ffef40, #eee);
    background:-webkit-gradient(linear, 0 0, 0 100%, from(#ffef40), to(#eee));
    background:linear-gradient(#ffef40, #eee);
               }
               #navmenu ul li a {text-decoration:none;  margin: 4px;
  padding: 5px 20px 5px 20px; color: blue;
  background:#e67e22;}
  .personal{
    background: #222 url(img/dark-rain.jpg);
    background-size: cover;
    background-position: center bottom;
    clear: both;
    padding: 2rem 2.5rem 5rem;
}
  
     </style>
     <div class="sys" >
      <?php if(have_posts()) :  setPostViews($post->ID)?>
                                <?php while(have_posts()) : the_post() ?>

                                    <div class="content_post first">
                                    <h2 class="sub_title"> <a href="<?php the_permalink(); ?>"><?php the_title(); the_ID ()?></a> </h2>
                                    <img class="span1" src="<?php bloginfo('template_url'); ?>/img/blog/1.jpg" alt="<?php echo  bloginfo('title');?>" />

                                    <p><?php the_content();?>
                                    </p>
                                    <!--<a class="btn-sample" href="<?php the_permalink(); ?>">ادامه مطلب &rsaquo;</a> -->
                                    <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('y/m/d'); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین<?php echo getPostViews($post->ID); ?></a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link();  $post->ID; ?></a></li>
                                    </ul>
                                </div><?php endwhile;
            endif; ?>
       

     </div>
     <div class="personal">بیشتر عناصر صفحات وب باکس ها می باشند که می توان ظاهر آنها را به نحو خاصی طراحی کرد. می توان پس زمینه زیبایی برای آنها در نظر گرفت یا دور آنها را با خط و حاشیه ای زیباسازی کرد.

در این فصل با ویژگی های مربوط به زیباسازی پس زمینه و حاشیه های یک عناصر آشنا خواهیم شد.

 
در مرحله اول سراغ پس زمینه عناصر می رویم. ویژگی های مربوط آن را می توانید به ترتیب زیر فرا بگیرید:
</div>
<div class="personal">
  <?php
    // The main query.
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_title();
        the_content();

       endwhile;
       endif;
       get_template_part( 'template-parts/category/calculator/cal' );
        
       ?>
       </div>
       <div class="personal">
  <?php 
  
// are we showing a date-based archive?
if ( is_date() ) {
 if ( date( 'Y' ) != get_the_date( 'Y' ) ) {
 // this post was written in a previous year
 // so let's style the content using the "oldentry" class
 echo '<div class="oldentry personal"><br>';
 the_title( '<h2 class="entry-title ">', '</h2>' ); 
 } else {
 echo '<div class="entry">';
 }
} else {
 echo '<div class="entry">';
}
 
the_content( 'Read the rest of this entry »' );
?></div>
<?php get_footer('sara')  ?>