<!-- Mirrored from cooper.mustachethemes.com/1/home2.html footer-soraya.php  -->
<div id="footer" class="content_footer span12">
		<div class="footer-descript">
		<p><?php echo esc_url( get_template_directory_uri() ); ?>/js/js.js</p>
		<p><?php echo bloginfo('template_url'); ?></p>
		<p><?php echo bloginfo('template_directory'); ?></p>
		<p><?php echo bloginfo('stylesheet_url'); ?></p>
		<p><?php bloginfo('url') ?></p>
        <p><?php echo esc_url( home_url( '/' ) ); ?></p>
        <?php $description = get_bloginfo( 'display' );?>
        <p><?php echo($description);  ?></p>
        <p><?php echo get_stylesheet_directory_uri() ; ?></p>
        <p><?php echo get_stylesheet_uri() ; ?></p>
        <p><?php echo get_stylesheet_uri() ; ?></p>
        <p>hi<?php echo wp_head(); ?></p>
			<a href="<?php bloginfo('url'); ?>/wp-login.php" 
			title="<?php bloginfo('name'); ?>"><p>&copy<?php echo "copy-right".date('20y'); ?><?php bloginfo('name'); ?></a></p>
			<?php bloginfo('description'); ?> ساخته شده توسط : <a href="<?php bloginfo('url'); ?>">hesam</a>
			
		</div>
</div>
</body>
</html>