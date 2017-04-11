<?php
add_action('wp_head', '_action_xs_hook_css', 100);

function _action_xs_hook_css() {
    if (defined('FW')) {
        $main_color = fw_get_db_settings_option('main_color');

        //global font
        $global_title = fw_get_db_settings_option('heading_title');
//        fw_print($global_title);

        if ($global_title != '') {
            $global_title_family = $global_title['family'];
            $global_title_style = $global_title['style'];

            if ($global_title_style === 'regular') {
                $global_title_style = '400';
            }
            if ($global_title_style == 'italic') {
                $global_title_style = '400italic';
            }
            $global_title_font_style = ( strpos($global_title_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_title_font_weight = 'font-weight: ' . intval($global_title_style) . ';';
        }


        $global_subtitle = fw_get_db_settings_option('heading_subtitle');
        //fw_print($global);
        if ($global_subtitle != '') {
            $global_subtitle_family = $global_subtitle['family'];
            $global_subtitle_style = $global_subtitle['style'];

            if ($global_subtitle_style === 'regular') {
                $global_subtitle_style = '400';
            }
            if ($global_subtitle_style == 'italic') {
                $global_subtitle_style = '400italic';
            }
            $global_subtitle_font_style = ( strpos($global_subtitle_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_subtitle_font_weight = 'font-weight: ' . intval($global_subtitle_style) . ';';
        }

        $global_body_font = fw_get_db_settings_option('body_font');

        if ($global_body_font != '') {
            $global_body_font_family = $global_body_font['family'];
            $global_body_font_style = $global_body_font['style'];

            if ($global_body_font_style === 'regular') {
                $global_body_font_style = '400';
            }
            if ($global_body_font_style == 'italic') {
                $global_body_font_style = '400italic';
            }
            $global_body_font_font_style = ( strpos($global_body_font_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_body_font_font_weight = 'font-weight: ' . intval($global_body_font_style) . ';';
        }


//        Page header

        $hero_heading = archer_get_option('general_posts_header');
        $hero_overlay = $hero_heading['header_overlay_color'];
        $archer_page_hero_heading = archer_get_option('general_page_header');
        $page_hero_overlay = $archer_page_hero_heading['header_overlay_color'];


        $blog_hero = $hero_heading['header_image'] != '' ? $hero_heading['header_image']['url'] : ARCHER_IMAGES . '/exman.jpg';

        $page_hero = $archer_page_hero_heading['header_image'] != '' ? $archer_page_hero_heading['header_image']['url'] : ARCHER_IMAGES . '/exman.jpg';


        $footer_bg = archer_get_option('bg_color');
        $footer_text_color = archer_get_option('footer_text_color');

        //custom css
        $custom_css = archer_get_option('custom_css');


        $output = "<style type='text/css'>"
                . ".home-intro .intro-wrap h1, .home-intro-carousel h1, .home-intro-app-block h1{font-family: '$global_title_family'; $global_title_font_style $global_title_font_weight}"
                . ".home-intro h5, .home-intro-2nd-half-try h5{font-family: '$global_subtitle_family'; $global_subtitle_font_style $global_subtitle_font_weight}"
                . ".fw-heading h1, .fw-heading h2, .fw-heading h3, .fw-heading h4, .fw-heading h5, .fw-heading h6, h1, h2, h3, h4, h5, h6{font-family: '$global_title_family'; $global_title_font_style $global_title_font_weight}"
                . ".fw-special-subtitle-half, .fw-special-subtitle, .fw-contact-form-description, .team-member h5{font-family: '$global_subtitle_family'; $global_subtitle_font_style $global_subtitle_font_weight}"
                . "body{font-family: '$global_body_font_family'; $global_body_font_font_style $global_body_font_font_weight}"
                . ".blog-hero-bg {background: url($blog_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".page-hero-bg {background: url($page_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".blog-hero {background: $hero_overlay;width: 100%;} .page-hero {background: $page_hero_overlay;width: 100%;} .colorsbg, .separator, .separator-left, .separator {background: $main_color;}"
                . "a,.navbar-default.affix .navbar-nav > li > a:hover, .navbar-default.affix .navbar-nav > li > a:active, .mobile-nav-overlay ul li a:hover, .mobile-nav-overlay ul li a:active, .mobile-nav-overlay ul li a:focus, .navbar-nav .active .fa-times:hover, .navbar-nav .active .fa-times:active, .navbar-nav .active .fa-times:focus, .cta h2 em, .btn-secondary:hover, .btn-secondary:active, .btn-secondary:focus, .btn-secondary:active:hover, .btn-secondary:active:focus, .plan-price h5, .cta-dark .section-header h3, .team-details .owl-theme .owl-controls .owl-buttons div, .footer-nav a:hover, .footer-nav a:focus,.terms-privacy a:hover, .terms-privacy a:focus, .product-statistics i,.fw-iconbox-2 .fw-iconbox-image,.box-item i{color: $main_color;} a:hover, a:focus, .entry-header h1 a, .entry-meta i {color: $main_color;}"
                . ".step-number, .btn-primmary, .tooltip-inner, .faq-support,.chat-btn.fixed,.btn-msg,.play-btn, .bg-color, .widget_search .search-form input[type='submit'], .widget_search input[type='submit'], .player-1464870696972 .controls .play:hover{ background-color:$main_color;}"
                . ".affix .navbar-nav > li > a.btn-nav, .pointer, .cta-info .section-spacing, .btn-download:hover, .btn-download:active, .btn-download:focus, .btn-download:active:hover, .btn-download:active:focus, .twitter-reviews .owl-theme .owl-controls .owl-page span, .sl-page .chat-btn, .team-details .owl-theme .owl-controls.clickable .owl-buttons div:hover { background: $main_color;}"
                . ".cta h2 em {border-bottom: 3px solid $main_color;}"
                . ".cta .btn, .btn-download, .team-details .owl-theme .owl-controls .owl-buttons div { border: 2px solid $main_color;}"
                . ".tooltip.top .tooltip-arrow { border-top-color: $main_color; }"
                . ".caldera-grid .form-control:focus { border-color: $main_color;}.footer-customcss{background: $footer_bg;color:$footer_text_color;}"
				. ".woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce button.button.alt, .woocommerce .cart .button, .woocommerce .cart input.button,.woocommerce input.button, .woocommerce input.button.alt, .widget.woocommerce .woocommerce-product-search input[type=submit]{background: $main_color;}.woocommerce-cart .wc-proceed-to-checkout a:hover.checkout-button, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{background: $main_color;}.woocommerce span.onsale {background-color: $main_color;}.woocommerce div.product p.price, .woocommerce div.product span.price {color: $main_color;}.woocommerce .woocommerce-message, .woocommerce .woocommerce-info {border-top-color: $main_color;}.woocommerce .woocommerce-message:before, .woocommerce .star-rating span:before {color: $main_color;}.woocommerce #respond input#submit, .fw-shortcode-calendar .day-highlight {background: $main_color;}.widget_product_search .search-form input[type=\'submit\'],a.button.add_to_cart_button.product_type_simple, .widget_product_search input[type=\'submit\'] {background-color:$main_color;}#sidebar .buttons a{background-color:$main_color;}"
                . "$custom_css"
                . "</style>";
        echo $output;
    }
}

add_action('wp_footer', 'archer_action_javascript'); // Write our JS below here

function archer_action_javascript() {
    ?>
    <script type="text/javascript" > var adminAjax = "<?php echo admin_url('admin-ajax.php') ?>";</script> <?php
}
