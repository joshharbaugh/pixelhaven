<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div id="page">
			<div id="content">
				<div id="slideshow">
				<?php $featured = new WP_Query(); $featured->query('showposts=1'); while ($featured->have_posts()) : $featured->the_post(); ?>
				<?php include("firstimage.php"); ?>
				<?php $thumbwidth = 631; $thumbheight = 298;?>
					<div class="boxgrid captionfull">
						<a href="<?php the_permalink() ?>" class="image"><img src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $thumbheight ?>" width="<? echo $thumbwidth ?>" /></a>
						<div class="cover boxcaption">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<p><?php the_content_rss('', TRUE, '', 20); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
				<div id="slide-nav">
					<a id="prev" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow_left.gif" alt="Prev" border="0" /></a>
					<a id="next" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow_right.gif" alt="Next" border="0" /></a>
				</div>
				
				<div id="popular-posts">
					<h2>Recent Posts</h2>
					
					<div class="post" style="border:0;">
						<?php $recentPosts = new WP_Query(); $recentPosts->query('showposts=1&offset=1'); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
						<?php include("firstimage.php"); ?>
						<?php $thumbwidth = 298; $thumbheight = 108;?>
						<a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title(); ?>" class="image"><img src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $thumbheight ?>" width="<? echo $thumbwidth ?>" /></a>
						<?php endwhile; ?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content_rss('', TRUE, '', 27); ?><br />
						<a class="more-link" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
					</div>
					
					<div class="post" style="margin-left:23px;border:0;">
						<?php $recentPosts = new WP_Query(); $recentPosts->query('showposts=1&offset=2'); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
						<?php include("firstimage.php"); ?>
						<?php $thumbwidth = 298; $thumbheight = 108;?>
						<a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title(); ?>" class="image"><img src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $thumbheight ?>" width="<? echo $thumbwidth ?>" /></a>
						<?php endwhile; ?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content_rss('', TRUE, '', 27); ?><br />
						<a class="more-link" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
					</div>
				</div>
				<div style="clear:both;"></div>
		
				<div id="blog-posts">
					<h2>Blog</h2>
			
				<?php if (have_posts()) : ?>
				<?php
				global $more;
				$more = 0;
				$temp = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query('offset=3&posts_per_page=10'.'&orderby=date');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
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
				
					<div id="pagination" style="display:none">
						<?php next_posts_link('&laquo; Older Entries') ?>
						<?php previous_posts_link(' &raquo; Newer Entries') ?>
					</div>
					
				<?php $wp_query = null; $wp_query = $temp; ?>
		
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
