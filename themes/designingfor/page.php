<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div id="page">

			<div id="content">
			
			<div id="blog-posts">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
				</div>
			</div>
			<?php endwhile; ?>
				
				<div id="pagination">
					<?php next_posts_link('&laquo; Older Entries') ?>
					<?php previous_posts_link(' &raquo; Newer Entries') ?>
				</div>
	
			<?php else : ?>
	
				<div class="post">
					<h2>Not Found</h2>
					<p>Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
				</div>
	
			<?php endif; ?>
			</div>
			</div>
		<?php get_sidebar(); ?>
		</div>
	</div>
	<div style="clear:both;"></div>

<?php get_footer(); ?>
