<?php if($image != "") {
$thumbwidth = 100; $thumbheight = 100;?>
<a class="thumb image" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
<img class="postThumb" src="<? bloginfo('template_url'); ?>/scripts/timthumb.php?src=<? echo $image ?>&w=<? echo $thumbwidth ?>&h=<? echo $thumbheight ?>&zc=1" alt="<?php the_title(); ?>" height="<? echo $thumbheight ?>" width="<? echo $thumbwidth ?>" />
</a>
<?php } ?>
