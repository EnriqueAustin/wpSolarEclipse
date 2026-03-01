<?php
/**
 * Theme functions and definitions
 *
 * @package SolarEclipse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup theme features.
 */
function solar_eclipse_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'solar-eclipse' ),
			'footer'  => __( 'Footer Menu', 'solar-eclipse' ),
		)
	);

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add theme support for wide alignment (Gutenberg)
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'solar_eclipse_setup' );

/**
 * Enqueue scripts and styles.
 */
function solar_eclipse_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'solar-eclipse-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap', array(), null );

	// Theme CSS (Compiled via Tailwind)
	wp_enqueue_style( 'solar-eclipse-style', get_template_directory_uri() . '/assets/css/theme.css', array(), wp_get_theme()->get( 'Version' ) );

	// Vanilla JS interactions
	wp_enqueue_script( 'solar-eclipse-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'solar_eclipse_scripts' );

// Allow SVG uploads
function solar_eclipse_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'solar_eclipse_mime_types');
