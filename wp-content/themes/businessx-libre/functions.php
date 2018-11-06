<?php
/**
 * Businessx Libre functions and definitions.
 *
 * @package BusinessxLibre
 * @since 1.0.0
 */

define( 'BUSINESSX_LIBRE_VERSION', '1.0.0' );

/**
 * Load assets.
 *
 * @since 1.0.0
 */
function businessx_libre_enqueue() {
    $parent = 'businessx-style';
    $style  = '/style.css';

    // Parent style
    wp_enqueue_style( 
        $parent, 
        get_template_directory_uri() . $style,
        array(),
        BUSINESSX_VERSION
    );

    // Child style
    wp_enqueue_style( 
        'businessx-libre-style', 
        get_stylesheet_directory_uri() . $style, 
        array( $parent ), 
        BUSINESSX_LIBRE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'businessx_libre_enqueue' );

/**
 * Dequeue default Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function businessx_libre_dequeue_fonts() {
    wp_dequeue_style( 'businessx-fonts' );
}
add_action( 'wp_enqueue_scripts', 'businessx_libre_dequeue_fonts', 15 );

/**
 * Enqueue Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function businessx_libre_enqueue_fonts() {
    wp_enqueue_style( 
        'businessx-libre-fonts', 
        businessx_libre_fonts_setup(), 
        array(), 
        BUSINESSX_LIBRE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'businessx_libre_enqueue_fonts', 5 );

/**
 * Google Fonts setup
 *
 * @since  1.0.0
 * @return string Google Fonts URL
 */
function businessx_libre_fonts_setup() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    $fonts[] = 'Libre Franklin:400,700,300';
    $fonts[] = 'Roboto:400,300,700,900,300italic,400italic,700italic';

    $fonts_args = apply_filters( 'businessx_libre_fonts_setup', array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
    ), compact( 'fonts', 'subsets' ) );

    return add_query_arg( $fonts_args, 'https://fonts.googleapis.com/css' );
}