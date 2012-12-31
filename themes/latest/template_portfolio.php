<?php
/**
 * Template Name: Portfolio Template
 * Description: A Page Template that shows custom post type: portfolio
 *
 *
 */
get_header(); ?>

	<section class="projects">
	          <h1>A few selected projects for your viewing pleasure</h1>
	          <ul>
<?php 
global $paged;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //For pagination

$posts = query_posts('post_type=portfolio&paged='.$paged); //Make sure we let WordPress know we need posts ONLY from the portfolio post type
if(have_posts()) : while(have_posts()) : the_post();

	$image_url = theme_post_image(); //Use the function to fetch the portfolio image
	if($image_url)
	          $image_url_cropped = theme_build_image($image_url, 220, 150);

 ?>

			<li>
				<?php if($image_url): ?>
					<a href="<?php the_permalink(); ?>">
						<span style="background: url('<?php echo $image_url_cropped; ?>') no-repeat center center transparent;" class="image-wrap">
							<img class="image align-left" alt="" src="<?php echo $image_url; ?>" />
						</span>
					</a>
				<?php endif; ?>
				<!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
			</li>
		
<?php endwhile; ?>

<?php else: //If no posts are present ?>

			<li>
				<p><?php _e('No posts were found.', 'latest'); ?></p>
			</li>
				
<?php endif; ?>
		</ul>

	</section>
			
<?php get_footer(); ?>
			