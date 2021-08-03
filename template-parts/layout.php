<?php if('page' === $post->post_type){ ?>
<article id="post-<?php the_ID(); ?>" >
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
    </header><!-- .entry-header -->
    <div class="entry-content">
         <?php the_content() ; 
         print_r($post);
         global $post; // if outside the loop
         if ( is_page() && $post->post_parent ) {
     echo '<br> This is a subpage';
   } else {
     echo '<br>This is not a subpage';
   }
   if ( is_front_page() && is_home() ) {
  echo  'Default homepage';
} elseif ( is_front_page() ) {
  echo '<br>static homepage';
} elseif ( is_home() ) {
  echo '<br>blog page';
} else {
  echo '<br>everything else<br>';
}
$query = new wp_query();
print_r($query);
    die();?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
<?php }?>