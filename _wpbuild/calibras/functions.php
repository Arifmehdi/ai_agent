<?php
/**
 * Calibras theme setup
 */

if ( ! function_exists( 'calibras_setup' ) ) {
	function calibras_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		register_nav_menus( array( 'primary' => 'Primary Menu' ) );
	}
}
add_action( 'after_setup_theme', 'calibras_setup' );

/**
 * Enqueue styles & scripts
 */
function calibras_assets() {
	$u = get_template_directory_uri();
	$v = '1.0.0';

	// Fonts
	wp_enqueue_style( 'cal-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );

	// Base styles (used on every page)
	wp_enqueue_style( 'cal-style', $u . '/assets/css/style.css', array(), $v );

	// Per-page styles
	if ( is_page( 'elector' ) ) {
		wp_enqueue_style( 'cal-elector', $u . '/assets/css/elector.css', array( 'cal-style' ), $v );
	}
	if ( is_page( 'about' ) ) {
		wp_enqueue_style( 'cal-about', $u . '/assets/css/about.css', array( 'cal-style' ), $v );
	}
	if ( is_page( 'blog' ) ) {
		wp_enqueue_style( 'cal-blog', $u . '/assets/css/blog.css', array( 'cal-style' ), $v );
	}
	if ( is_page( 'blog-detail' ) ) {
		wp_enqueue_style( 'cal-blogd', $u . '/assets/css/blog-detail.css', array( 'cal-style' ), $v );
	}
	if ( is_page( 'contact' ) ) {
		wp_enqueue_style( 'cal-contact', $u . '/assets/css/contact.css', array( 'cal-style' ), $v );
	}

	// Animations (site-wide)
	wp_enqueue_style( 'cal-anim', $u . '/assets/css/animations.css', array( 'cal-style' ), $v );

	// Scripts
	wp_enqueue_script( 'cal-script', $u . '/assets/js/script.js', array(), $v, true );
	wp_enqueue_script( 'cal-anim-js', $u . '/assets/js/animations.js', array(), $v, true );
}
add_action( 'wp_enqueue_scripts', 'calibras_assets' );

/**
 * Clean up wp_head a little (optional, keeps markup tidy)
 */
remove_action( 'wp_head', 'wp_generator' );
