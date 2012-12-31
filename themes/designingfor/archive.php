<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div id="page">

			<div id="content">
			
			<div id="blog-posts">
			
				<?php if (have_posts()) : ?>
				
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			  	<?php if( is_tag() ) { ?>
				<h2 class="pagetitle">Posts Tagged <span><?php single_tag_title(); ?></span></h2>
				<?php } elseif (is_category()) { ?>
				<h2 class="pagetitle">Archive for <?php single_cat_title(); ?></h2>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
			  	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
			  	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
			  	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>
			  	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			  	<?php } ?>
				
				<?php while (have_posts()) : the_post(); ?>
				
				<?php include("firstimage.php"); ?>	
		
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php include("thumbnail.php"); ?>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<span><?php the_category(', ') ?> | <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '| ', ' &raquo;'); ?></span>
			
						<div class="entry">
							<p><?php the_content_rss('', TRUE, '', 33); ?><br />
							<a class="more-link" href="<?php the_permalink() ?>">Continue Reading &raquo;</a>
							</p>
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
