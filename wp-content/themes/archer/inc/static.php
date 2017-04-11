<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {
    wp_enqueue_style('archer-bootstrap.min.css', ARCHER_CSS . '/bootstrap.min.css', null, ARCHER_VERSION);

    //Framework CSS Essectial files
    wp_enqueue_style('archer-blog.css', ARCHER_CSS . '/blog.css', null, ARCHER_VERSION);
    wp_enqueue_style('archer-xs_main.css', ARCHER_CSS . '/xs_main.css', null, ARCHER_VERSION);

    //Theme JS FILES
    wp_enqueue_style('archer-bootstrap.min.css', ARCHER_CSS . '/bootstrap.min.css', null, ARCHER_VERSION);
    wp_enqueue_style('archer-font-awesome.min.css', ARCHER_CSS . '/font-awesome.min.css', null, ARCHER_VERSION);
    wp_enqueue_style('archer-magnific-popup.css', ARCHER_CSS . '/magnific-popup.css', null, ARCHER_VERSION);
    wp_enqueue_style('archer-owl.carousel.css', ARCHER_CSS . '/owl.carousel.css', null, ARCHER_VERSION);
    wp_enqueue_style('archer-plugin', ARCHER_CSS . '/plugin.css', null, ARCHER_VERSION);

    wp_enqueue_style('iconfont', ARCHER_CSS . '/icon-font.css', null, ARCHER_VERSION);

    wp_enqueue_style('archer-main.css', ARCHER_CSS . '/main.css', null, ARCHER_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    // wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)

    //Unyson Form helper
    wp_enqueue_script('archer-fw-form-helpers.js', ARCHER_SCRIPTS . '/fw-form-helpers.js', array('jquery'), ARCHER_VERSION, true);


    //Theme CSS FILES
    wp_enqueue_script('archer-bootstrap.min.js', ARCHER_SCRIPTS . '/bootstrap.min.js', array('jquery'), ARCHER_VERSION, true);


    wp_enqueue_script('archer-jquery.ajaxchimp.min.js', ARCHER_SCRIPTS . '/jquery.ajaxchimp.min.js', array('jquery'), ARCHER_VERSION, true);
//    wp_enqueue_script('archer-jquery.animateNumber.min.js', ARCHER_SCRIPTS . '/jquery.animateNumber.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-jquery.magnific-popup.min.js', ARCHER_SCRIPTS . '/jquery.magnific-popup.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-jquery.waypoints.min.js', ARCHER_SCRIPTS . '/jquery.waypoints.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-owl.carousel.min.js', ARCHER_SCRIPTS . '/owl.carousel.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-placeholders.min.js', ARCHER_SCRIPTS . '/placeholders.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-retina.min.js', ARCHER_SCRIPTS . '/retina.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-tweetie.min.js', ARCHER_SCRIPTS . '/tweetie.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-twitter-fetcher-min', ARCHER_SCRIPTS . '/twitterFetcher_min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-tweet.js', 'http://platform.twitter.com/widgets.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-masonary', ARCHER_SCRIPTS . '/masonry.pkgd.min.js', array('jquery'), ARCHER_VERSION, true);
    wp_enqueue_script('archer-counterup', ARCHER_SCRIPTS . '/jquery.counterup.min.js', array('jquery'), ARCHER_VERSION, true);



    wp_enqueue_script('archer-main.js', ARCHER_SCRIPTS . '/main.js', array('jquery'), ARCHER_VERSION, true);


    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


