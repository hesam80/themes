<?php
/*
Template Name: sor
*/

?>
<?php get_header('sor') ?>
<!-- begin page  sor.php  --><!-- begin page  sor.php  -->
<body <?php body_class(); ?>>
<div class="top">                          
<nav>
  <menu>
    <li><a href="<?php bloginfo('url');?>">☀</a></li>
    <li><a href="<?php bloginfo('url');?>/?cat=2" class="selected">✈</a></li>
    <li><a href="<?php bloginfo('url');?>/?cat=3">❄</a></li>
    <li><a href="<?php bloginfo('url');?>/?cat=4">☎</a></li>
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
 
    <h1><?php the_title(); ?></h1>
	<p><?php  the_content() ;    ?></p>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" target="_blank">Link For Share</a>

<?php endwhile; else: ?>
    <?php _e( 'متاسفانه پستی برای نمایش وجود ندارد', 'textdomain' ); ?>
<?php endif; ?>
      
      </div> </div> </div>

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