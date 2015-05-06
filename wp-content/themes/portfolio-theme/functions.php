<?php
if ( ! function_exists( 'portfolio_setup' ) ) :

function portfolio_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'portfolio' ),
        'social'  => __( 'Social Links Menu', 'portfolio' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // portfolio_setup

add_action( 'after_setup_theme', 'portfolio_setup' );


if ( ! function_exists( 'portfolio_init' ) ) :

function portfolio_init() {


    // Use categories with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */


/* Pinegrow generated Custom Post Types End */

}
endif; // portfolio_setup

add_action( 'init', 'portfolio_init' );
?>
