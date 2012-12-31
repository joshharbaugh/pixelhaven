<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article>		
		<?php
		$highsrc_image_url = theme_post_image();
		$lowsrc_image_url = theme_post_lowsrc_image();
		if($highsrc_image_url && $lowsrc_image_url) : ?>
		<div class="masthead">
			<?php echo $highsrc_image_url; ?>
		</div>
		<!--$highsrc_image_url: <?php echo $highsrc_image_url; ?>-->
		<!--$lowsrc_image_url: <?php echo $lowsrc_image_url; ?>-->
		<!--<img src="<?php echo $lowsrc_image_url; ?>" data-fullsrc="<?php echo $highsrc_image_url; ?>" border="0" id="article-image" />-->
		<div class="figcaption"><a href="#"><span class="icon link"></span>Link</a></div>
		<?php endif; ?>
		<header>
			<div class="date"><?php the_time('F jS, Y') ?></div>
			<span class="divider">R R R</span>
			<h1 class="title"><?php the_title(); ?></h1>			
		</header>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<p class="paged">' . __( 'Pages:', 'latest' ), 'after' => '</p>' ) ); ?>
		<nav class="pagination">
			<span class="prev icon"><?php next_posts_link( __( '&#40;', 'latest' ) ); ?></span>
			<span class="next icon"><?php previous_posts_link( __( '&#41;', 'latest' ) ); ?></span>
		</nav>
	</article>
  	<?php endwhile; ?>
  	<?php endif; ?>
	
	<aside role="complimentary">
		<?php get_sidebar(); ?>
	</aside>
	
<?php get_footer(); ?>