<?php
/**
 * The Template for displaying all post-format quote posts.
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
		$image_url = theme_post_image();
		if($image_url)
			$image_url = theme_post_image();
		if($image_url): ?>
		<img src="<?php echo $image_url; ?>" data-fullsrc="<?php echo $image_url; ?>" border="0" />
		<div class="figcaption"><a href="<?php echo $image_url; ?>"><span class="icon photo"></span>Photo</a></div>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<p class="paged">' . __( 'Pages:', 'latest' ), 'after' => '</p>' ) ); ?>
		<nav class="pagination">
			<span class="prev icon"><?php previous_post_link( '%link', '&#40;', 'latest' ); ?></span>
			<span class="next icon"><?php next_post_link( '%link', '&#41;', 'latest' ); ?></span>
		</nav>
	</article>
  	<?php endwhile; ?>
  	<?php endif; ?>

	<aside role="complimentary">
		<?php get_sidebar(); ?>
	</aside>

<?php get_footer(); ?>