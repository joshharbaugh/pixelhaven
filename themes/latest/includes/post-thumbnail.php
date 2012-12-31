<?php
	$image_url = theme_post_image();
	
	if(!$image_url)
		return;
		
	$image_url = theme_build_image($image_url, 220, 150);
?>

		<a href="<?php the_permalink(); ?>"><img class="image alignleft" alt="<?php the_title(); ?>" src="<?php echo $image_url; ?>" /></a>