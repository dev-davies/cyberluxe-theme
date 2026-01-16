<?php
/**
 * Novel Homes Theme Functions
 */

if ( ! function_exists( 'novel_homes_setup' ) ) :
    function novel_homes_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register Main Menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Main Menu', 'novel-homes' ),
        ) );

        // Add WooCommerce Support
        add_theme_support( 'woocommerce' );
    }
endif;
add_action( 'after_setup_theme', 'novel_homes_setup' );

/**
 * Enqueue scripts and styles.
 */
function novel_homes_scripts() {
    // Main Stylesheet
    wp_enqueue_style( 'novel-homes-style', get_stylesheet_uri() );

    // Font Imports (Google Fonts)
    wp_enqueue_style( 'novel-homes-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Orbitron:wght@700;900&display=swap', array(), null );

    // Main JS
    // Enqueue main.js dependent on nothing, version 1.0, and load in footer (true)
    wp_enqueue_script( 'novel-homes-main-js', get_template_directory_uri() . '/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'novel_homes_scripts' );
