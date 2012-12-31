<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
		<div id="sidebar">
			<div id="search">
				<?php get_search_form(); ?>
			</div>
			
			<div id="advertisement">
				<a href="#" class="image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ad.jpg" alt="" width="200" /></a>
			</div>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
			<div class="widget-container">
				<h2 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h2>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</div>
			
			<div class="widget-container">
				<h2 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</div>
				
			<?php endif; ?>
		</div>

