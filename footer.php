<div id="footer">
		<div class="footer-descript">
		<p><?php echo esc_url( get_template_directory_uri() ); ?>/js/js.js</p>
		<p><?php echo bloginfo('template_url'); ?></p>
		<p><?php echo bloginfo('template_directory'); ?></p>
		<p><?php echo bloginfo('stylesheet_url'); ?></p>
        <p><?php echo esc_url( home_url( '/' ) ); ?></p>
        <?php $description = get_bloginfo( 'display' );?>
        <p><?php echo($description);  ?></p>

			<a href="<?php bloginfo('url'); ?>/wp-login.php" 
			title="<?php bloginfo('name'); ?>"><p>&copy<?php echo "copy-right".date('20y'); ?><?php bloginfo('name'); ?></a></p>
			<?php bloginfo('description'); ?> ساخته شده توسط : <a href="<?php bloginfo('url'); ?>">hesam</a>
			
		</div>
</div>
</body>
</html>