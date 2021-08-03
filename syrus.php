<?php
/*
Template Name: syrus
*/

?>
<?php get_header('syrus');  ?>
<div class="container">
	
	<div class="navbar">

<div class="personal row-fluid .span4">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<?php  if(in_category('4')|| $post->ID =='382'):  ?>
		<div class="post-cat-four">
			<div class="navbar-inner">
		<?php get_search_form(); ?>
		</div>
		<?php else: ?>
			<div class="post">
		<?php endif;?>
		
<h1 style="color: #eee;"><?php the_title(); the_ID(); ?></h1>
<?php the_content(); 
 if ( !has_post_thumbnail()) {the_post_thumbnail('thumbnail');
   // $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   // echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   // the_post_thumbnail('thumbnail');
   // echo '</a>';
 }
 ?>
</div>
 <ul class="info_post">
                                        <li><a href="#"><span class="icon-calendar"></span>تاریخ : <?php the_time('F, jS, Y '); ?></a></li>
                                        <li><a href="#"><span class="icon-user"></span>نویسنده : <?php the_Author(); ?></a></li>
                                        <li><a href="#"><span class="icon-tags"></span>عکاسی، دیزاین : <?php the_Author_Email(); ?></a></li>
                                        <li><a href="#"><span class="icon-comment"></span>نظرات : <?php comments_popup_link(); ?></a></li>
                                    </ul>



<?php endwhile; endif; ?>
</div><!-- #content -->
</div><!-- #container -->
</div>
</div>

<div class="row-fluid span4"></div>
</body>
</html>