<?php get_header(); ?>
	
	<section class="projects">
	          <h1>A few selected projects for your viewing pleasure</h1>
	          <ul>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<?php include (THEME_INCLUDES . 'post-excerpt.php'); ?>
		
<?php endwhile; ?>

<?php else: //If no posts are present ?>
	
			<li>
				<p><?php _e('No posts were found.', 'latest'); ?></p>
			</li>
				
<?php endif; ?>

		</ul>
                    <?php include (THEME_INCLUDES . 'pagination.php'); ?>
	</section>
			
<?php get_footer(); ?>
			