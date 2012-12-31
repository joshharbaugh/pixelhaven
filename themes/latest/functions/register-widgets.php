<?php

          if(function_exists('register_sidebar')){
		register_sidebar(array(
						'name' => __( 'Primary Widget Area', 'latest' ),
						'id' => 'primary-widget-area',
						'description' => __( 'The primary widget area', 'latest' ),
						'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
						'after_widget' => '</li>',
						'before_title' => '<h3 class="widget-title">',
						'after_title' => '</h3>' )
						);
	}

	if(function_exists('register_sidebar')){
		register_sidebar(array(
						'name'          => 'Footer Column 1',
						'description'   => 'The first column in the footer',
						'before_widget' => '<li>',
						'after_widget'  => '</li>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>' )
						);
	}
	
	if(function_exists('register_sidebar')){
		register_sidebar(array(
						'name'          => 'Footer Column 2',
						'description'   => 'The second column in the footer',
						'before_widget' => '<li>',
						'after_widget'  => '</li>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>' )
						);
	}
	
	if(function_exists('register_sidebar')){
		register_sidebar(array(
						'name'          => 'Footer Column 3',
						'description'   => 'The third column in the footer',
						'before_widget' => '<li>',
						'after_widget'  => '</li>',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>' )
						);
	}

	if(function_exists('register_sidebar')){
		register_sidebar(array(
						'name'          => 'Sidebar',
						'description'   => 'Sidebar on all pages',
						'before_widget' => '',
						'after_widget'  => '',
						'before_title'  => '<h2>',
						'after_title'   => '</h2>' )
						);
	}
	
?>
