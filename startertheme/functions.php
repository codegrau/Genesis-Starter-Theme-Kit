<?php

/*==================================================
=            Starter Theme Introduction            =
==================================================*/

/**
 *
 * About Starter
 * --------------
 * Starter is a project by Calvin Koepke, a front-end developer currently working at Rainmaker Digital.
 * The goal of the project is to create a starter theme for Genesis Framework developers that doesn't over-bloat
 * their starting base, while including commonly used templates, codes, and styles.
 *
 * Credits and Licensing
 * --------------
 * Starter was created by Calvin Koepke, and is under a GPL 2.0 license. Feel free to fork and submit pull-requests
 * on GitHub, and be a part of the community.
 * 
 * Find me on Twitter: @cjkoepke
 *
 */


/*============================================
=            Begin Functions File            =
============================================*/

/**
 *
 * Define Child Theme Constants
 *
 * @since 1.0.0
 *
 */
define( 'CHILD_THEME_NAME', 'Starter Theme' );
define( 'CHILD_THEME_AUTHOR', 'Calvin Koepke' );
define( 'CHILD_THEME_AUTHOR_URL', 'https://calvinkoepke.com/' );
define( 'CHILD_THEME_URL', 'http://startertheme.io' );
define( 'CHILD_THEME_VERSION', '1.0.0' );
define( 'TEXT_DOMAIN', 'startertheme' );

/**
 *
 * Start the engine
 *
 * @since 1.0.0
 *
 */
include_once( get_template_directory() . '/lib/init.php');

/**
 *
 * Apply custom body classes
 *
 * @since 1.0.0
 * @uses /lib/classes.php
 *
 */
include_once( get_stylesheet_directory() . '/lib/classes.php' );

/**
 *
 * Load files in the /assets/ directory
 *
 * @since 1.0.0
 *
 */
add_action( 'wp_enqueue_scripts', 'startertheme_load_assets' );
function startertheme_load_assets() {

	/* Load JS */
	wp_enqueue_script( 'startertheme-global', get_stylesheet_directory_uri() . '/assets/js/global.js', array( 'jquery' ), CHILD_THEME_VERSION );
	wp_enqueue_script( 'startertheme-responsive-menu', get_stylesheet_directory_uri() . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	/* Load Icons */
	wp_enqueue_style( 'dashicons' );

	/* Localize Responsive Menu Variables */
	$output = array(
		'mainMenu' => __( 'Menu', 'startertheme' ),
		'subMenu'  => __( 'Menu', 'startertheme' ),
	);
	wp_localize_script( 'startertheme-responsive-menu', 'starterthemeL10n', $output );

}

/**
 *
 * Add theme supports
 *
 * @since 1.0.0
 *
 */
add_theme_support( 'genesis-responsive-viewport' ); /* Enable Viewport Meta Tag for Mobile Devices */
add_theme_support( 'html5',  array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) ); /* HTML5 */
add_theme_support( 'genesis-accessibility', array( 'skip-links', 'search-form', 'drop-down-menu', 'headings' ) ); /* Accessibility */
add_theme_support( 'genesis-after-entry-widget-area' ); /* After Entry Widget Area */
add_theme_support( 'genesis-footer-widgets', 3 ); /* Add Footer Widgets Markup for 3 */


