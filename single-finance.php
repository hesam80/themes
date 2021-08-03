<?php
/*
Template Name: sor
*/

?>
<?php get_header('sor') ?>
<!-- Az inja dar page  sor.php for finance -->
<body <?php body_class(); ?>>
<div class="top">                          
<nav>
  <menu>
    <li><a href="#">☀</a></li>
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <p><?php echo get_post_type(); ?></p>
    <h1><?php the_title(); ?></h1>
	<p><?php  the_content() ;    ?></p>
    <a href="<?php echo get_permalink($ID); ?>" alt="<?php the_title(); ?>" target="_blank">Link For Share</a>

<?php endwhile; else: ?>
    <?php _e( 'متاسفانه پستی برای نمایش وجود ندارد', 'textdomain' ); ?>
<?php endif; ?>
      
      </div> </div> </div>
<!--<iframe width="100%" height="272" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12946.261391613263!2d51.3681649764005!3d35.78605188271738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e07e8197af337%3A0xd8d775d8dd594af1!2sSa&#39;adat+Abad%2C+District+2%2C+Tehran%2C+Tehran+Province%2C+Iran!5e0!3m2!1sen!2s!4v1544980657448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 <div class="container">
  <div class="box">
    <div class="content">
      <h6> <?php  bloginfo('name'); ?> </h6>
  <h5><?php bloginfo('rss_url'); ?></h5>
  <h5><?php bloginfo('atom_url'); ?> </h5>
  <nav><?php wp_dropdown_categories(); ?></nav>
  <div><?php wp_page_menu(); ?></div>
  
      </div> </div> </div> -->
  
  
  
  <?php get_footer('sor2') ?>