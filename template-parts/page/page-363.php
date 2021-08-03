<?php
/**
 * Template part for displaying page content in page-363.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *@package WordPress
 *@subpackage mahan
 *@since mahan
 */

?>
<?php if('page' === $post->post_type){ ?>
<article id="post-<?php the_ID(); ?>" >
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->
	<div class="entry-content">
		 <?php the_content() ; print($post);?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php }?>