<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div id="page">

			<div id="content">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div>

				<div id="blog-posts">
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a rel="bookmark"><?php the_title(); ?></a></h2>
						<span><?php the_category(', ') ?> | <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '| ', ' &raquo;'); ?></span>
	
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						</div>
					</div>
				</div>

				<?php comments_template(); ?>

			<?php endwhile; else: ?>

				<p>Sorry, no posts matched your criteria.</p>

			<?php endif; ?>
			
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div style="clear:both;"></div>
	
<?php get_footer(); ?>
