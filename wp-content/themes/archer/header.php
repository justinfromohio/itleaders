<?php
/**
 * header.php
 *
 * The header for the theme.
 */
$menu_logo = archer_get_option('menu_logo');
$tr_logo = archer_get_option('transparent_logo');
?>


<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- Favicon and Apple Icons -->
        <?php
        archer_get_header_icons();
        ?>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target="#main-navbar">
        <?php
        $loader = archer_get_option('loader');
        if ($loader == 'yes') {
            ?>
            <div class="cell">
                <div class="preloader">
                    <span class="plus-loader"><?php esc_html_e('Loading', 'archer') ?>...</span>
                </div>
            </div>
        <?php } ?>

        <!--navigation-->

        <?php get_template_part('content/content', 'nav'); ?>


