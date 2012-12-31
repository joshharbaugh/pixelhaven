<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js home" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<title><?php theme_titles(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<script src="<?php echo THEME_DIR; ?>/assets/js/head.min.js"></script>
	<script>
	var root = "<?php echo THEME_DIR; ?>";
	head.js(root+"/assets/js/modernizr.custom.js", root+"/assets/js/jquery-1.5.1.min.js", root+"/assets/js/jquery.easing.min.js", root+"/assets/js/jquery-ui-1.8.1.custom.min.js", root+"/assets/js/responsive-enhance.js", root+"/assets/js/jquery.lazyload.js", root+"/assets/js/slides.min.jquery.js", root+"/assets/js/superfish.js", function() {head.js(root+"/assets/js/custom.js");});
	</script>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://use.typekit.com/knr8eyo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>

	<header>
		<h1 class="logo">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo THEME_DIR; ?>/images/logo.png" border="0" alt="<?php theme_titles(); ?>" /></a>
		</h1>
		<p><?php echo bloginfo('description'); ?></p>
		<nav id="access" role="navigation">
			<?php theme_menu(); ?>
		</nav>
	</header>
