<?php get_header(); ?>
	
	<section class="projects">
			
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<header>
	                    <h1><?php the_title(); ?></h1>
	                    <div class="pagination">
	                    	<span class="prev"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'latest' ) . '' ); ?></span>
				<span class="next"><?php next_post_link( '%link', '' . _x( '', 'Next post link', 'latest' ) . '' ); ?></span>
			</div>
		</header>
		<div class="entry">
		          <?php the_content(); ?>
		</div>

		<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages: ', 'latest' ), 'after' => '</div>' ) ); ?>
<?php endwhile; endif; ?>

	</section>
			
<?php get_footer(); ?>
			