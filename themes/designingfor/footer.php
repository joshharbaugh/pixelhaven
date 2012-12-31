<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

	<div id="footer-wrapper">
		<div id="footer">
			<ul>
				<li>Navigation:</li>
				<li>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</li>
				<?php //wp_list_pages('title_li='); ?>
			</ul>
			
			<p>&copy; 2010 <?php bloginfo('name'); ?></p>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
