<?php

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('ARCHER_THEME', 'Archer Landing Page WordPress Theme');
define('ARCHER_VERSION', '1.0');
define('ARCHER_THEMEROOT', get_template_directory_uri());
define('ARCHER_THEMEROOT_DIR', get_template_directory());
define('ARCHER_IMAGES', ARCHER_THEMEROOT . '/assets/img');
define('ARCHER_IMAGES_DIR', ARCHER_THEMEROOT_DIR . '/assets/img');
define('ARCHER_CSS', ARCHER_THEMEROOT . '/assets/css');
define('ARCHER_CSS_DIR', ARCHER_THEMEROOT_DIR . '/assets/css');
define('ARCHER_SCRIPTS', ARCHER_THEMEROOT . '/assets/js');
define('ARCHER_SCRIPTS_DIR', ARCHER_THEMEROOT_DIR . '/assets/js');
define('ARCHER_PHPSCRIPTS', ARCHER_THEMEROOT . '/assets/php');
define('ARCHER_PHPSCRIPTS_DIR', ARCHER_THEMEROOT_DIR . '/assets/php');







/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}






/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('archer_setup')) {

    function archer_setup() {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = ARCHER_THEMEROOT . '/languages';
        load_theme_textdomain('archer', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(770, 335, array('center', 'center')); // Hard crop center center
        add_image_size('archer-blog-thumb', 770, 335, TRUE);



        /**
         * Register nav menus.
         */
        register_nav_menus(
                array(
                    'primary' => esc_html__('Main Menu', 'archer')
                )
        );
        register_nav_menus(
                array(
                    'footer' => esc_html__('Footer Menu', 'archer')
                )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
		
		
		//Woocommerce Theme support
		 add_theme_support('woocommerce');
		 
		 
    }

    add_action('after_setup_theme', 'archer_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - theme INC.
 * ----------------------------------------------------------------------------------------
 */
include_once get_template_directory() . '/inc/init.php';




remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function archer_before_main_content() {
	echo '<div class="container">';
}
add_action( 'woocommerce_before_main_content', 'archer_before_main_content' );

function archer_after_main_content() {
	echo '</div>';
}
add_action( 'woocommerce_after_main_content', 'archer_after_main_content' );





