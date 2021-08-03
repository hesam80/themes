<?php
/*
Template Name: course
*/

?>
<?php get_header('sor') ?>
<!-- Az inja dar page  course-template.php  -->
<!-- Az inja dar page  sor.php  -->
<body <?php body_class(); ?>>
<div class="top">                          
<nav>
  <menu>
    <li><a href="<?php the_permalink() ?>">☀</a></li>
    <li><a href="#" class="selected">✈</a></li>
    <li><a href="#">❄</a></li>
    <li><a href="#">☎</a></li>
  </menu>
</nav>
<nav class="menu2">
  <menu>
    <li><a href="<?php echo get_settings('home'); ?>">home</a></li>
    <li><a href="#">about</a></li>
    <li><a href="#" class="selected">contact</a></li>
    <li><a href="#">blog</a></li>
  </menu>
</nav></div>
<div class="container">
  <div class="box">
    <div class="content">
	<?php if ( have_posts() ) :  $query = new WP_Query( array('post_type' => 'course','posts_per_page' => 1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?> 
 <p><?php echo get_post_type(); ?></p>
    <h1><?php the_title(); ?></h1>
	<p><?php  the_content() ;    ?></p>
    <a href="<?php the_permalink(2); ?>" alt="<?php the_title(); ?>" target="_blank">Link For Share</a>

<?php endwhile; else: ?>
    <?php _e( 'متاسفانه پستی برای نمایش وجود ندارد', 'textdomain' ); ?>
<?php endif; ?>
      
      </div> </div> </div>
<iframe width="100%" height="272" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Littlehampton,+UK&amp;aq=0&amp;oq=little&amp;sll=53.800651,-4.064941&amp;sspn=20.121063,44.384766&amp;ie=UTF8&amp;hq=&amp;hnear=Littlehampton,+West+Sussex,+United+Kingdom&amp;t=m&amp;ll=50.811033,-0.538673&amp;spn=0.018982,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
<!-- <div class="container">
  <div class="box">
    <div class="content">
      <h6> <?php  bloginfo('name'); ?> </h6>
  <h5><?php bloginfo('rss_url'); ?></h5>
  <h5><?php bloginfo('atom_url'); ?> </h5>
  <nav><?php wp_dropdown_categories(); ?></nav>
  <div><?php wp_page_menu(); ?></div>
  
      </div> </div> </div> -->
  
  
  
  <?php get_footer('sor') ?>