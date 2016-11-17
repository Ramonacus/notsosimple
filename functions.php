<?php

// Theme setup:
if ( !function_exists( 'notsosimple_setup' ) ) :
	function notsosimple_setup() {
		load_theme_textdomain( 'notsosimple' );
	}
endif;
add_action( 'after_setup_theme', 'notsosimple_setup' );


// Script and style loading:
if ( !function_exists('notsosimple_scripts') ) :
	function notsosimple_scripts() {
		wp_enqueue_style( 'notsosimple-style', get_stylesheet_uri() );
	}
endif;
add_action( 'wp_enqueue_scripts', 'notsosimple_scripts' );


// Register widget and menu areas:
if ( !function_exists('notsosimple_register_menus' ) ) :
	function notsosimple_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'footer-menu' => __( 'Footer Menu' )
			)
		);
	}
endif;
add_action( 'init', 'notsosimple_register_menus' );

if ( !function_exists( 'notsosimple_sidebars' ) ) :
	function notsosimple_sidebars() {
		register_sidebar(
			array(
				'id'            => 'content-sidebar',
				'name'          => __( 'Content widget area', 'notsosimple' ),
				'description'   => __( 'Widgets in this area will be shown in all posts and pages that include the content sidebar.', 'notsosimple' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
			)
		);
	}
endif;
add_action( 'widgets_init', 'notsosimple_sidebars' );