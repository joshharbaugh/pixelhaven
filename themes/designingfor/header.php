<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("a").attr('href', function() {
		return this.href + '?theme=Designing+For+The+Masses';
	});

	//Full Caption Sliding (Hidden to Visible)
	$('.boxgrid.captionfull').hover(function(){
		$(".cover", this).stop().animate({top:'208px'},{queue:false,duration:300});
	}, function() {
		$(".cover", this).stop().animate({top:'308px'},{queue:false,duration:300});
	});
	
	$('#slideshow').cycle({ 
	    fx:     'fade',
	    speed:	'750', 
	    timeout: 5000,
	    next:   '#next', 
    	prev:   '#prev' 
 	});
	
	/*function onAfter() {
		$('.boxcaption').html("<h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>");
	}*/
}); 
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>

	<div id="top">&nbsp;</div>
	
	<div id="page-wrapper">
		<div id="header">
			<div id="logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" alt="Designing for the Masses" /></a></div>
		</div>
		<div style="clear: both;"></div>
		<ul id="navigation">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			<?php //wp_list_pages('title_li='); ?>
		</ul>