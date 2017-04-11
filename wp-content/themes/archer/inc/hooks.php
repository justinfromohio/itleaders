<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if ( !function_exists( 'archer_widget_init' ) ) {

	function archer_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
			array(
				'name'			 => esc_html__( 'Blog Widget Area', 'archer' ),
				'id'			 => 'sidebar-1',
				'description'	 => esc_html__( 'Appears on posts and pages.', 'archer' ),
				'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</div> <!-- end widget -->',
				'before_title'	 => '<h5 class="widget-title">',
				'after_title'	 => '</h5>',
			)
			);
			register_sidebar( array(
				'name'			 => esc_html__( 'Footer-1', 'archer' ),
				'id'			 => 'footer-1',
				'description'	 => esc_html__( 'Widgets for first footer area', 'archer' ),
				'before_widget'	 => '<li id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</li>',
				'before_title'	 => '<h3 class="site-footer">',
				'after_title'	 => '</h3>',
			) );

			register_sidebar( array(
				'name'			 => esc_html__( 'Footer-2', 'archer' ),
				'id'			 => 'footer-2',
				'description'	 => esc_html__( 'Widgets for secont footer area', 'archer' ),
				'before_widget'	 => '<li id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</li>',
				'before_title'	 => '<h3 class="site-footer">',
				'after_title'	 => '</h3>',
			) );

			register_sidebar( array(
				'name'			 => esc_html__( 'Footer-3', 'archer' ),
				'id'			 => 'footer-3',
				'description'	 => esc_html__( 'Widgets for 3rd footer area', 'archer' ),
				'before_widget'	 => '<li id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</li>',
				'before_title'	 => '<h3 class="site-footer">',
				'after_title'	 => '</h3>',
			) );

			register_sidebar( array(
				'name'			 => esc_html__( 'Footer-4', 'archer' ),
				'id'			 => 'footer-4',
				'description'	 => esc_html__( 'Widgets for 4th footer area', 'archer' ),
				'before_widget'	 => '<li id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</li>',
				'before_title'	 => '<h3 class="site-footer">',
				'after_title'	 => '</h3>',
			) );
			register_sidebar(
			array(
				'name'			 => __( 'Woocommerce Sidebar Area', 'archer' ),
				'id'			 => 'sidebar-woo',
				'description'	 => __( 'Appears on Woocommerce With sidebar template.', 'wellnesscenter' ),
				'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</aside>',
				'before_title'	 => '<h3 class="widget-title">',
				'after_title'	 => '</h3>',
			)
			);
		}
	}

	add_action( 'widgets_init', 'archer_widget_init' );
}



/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_archer_register_required_plugins() {

	$plugin_dir = 'http://xpeedstudio.net/demo-content/archer/plugins';

	$plugins = array(
		array(
			'name'		 => 'Unyson',
			'slug'		 => 'unyson',
			'required'	 => true,
			'source'	 => esc_url( $plugin_dir ) . '/unyson.zip',
		),
		array(
			'name'			 => 'Caldera Forms',
			'slug'			 => 'caldera-forms',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/caldera-forms/',
		),
		array(
			'name'			 => 'Simple Link List Widget',
			'slug'			 => 'simple-link-list-widget',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/simple-link-list-widget/',
		),
		array(
			'name'			 => 'Spoontalk Social Media Icons Widget',
			'slug'			 => 'spoontalk-social-media-icons-widget',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/spoontalk-social-media-icons-widget/',
		),
	);


	$config = array(
		'id'			 => 'archer', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'archer-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => true, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', '_action_archer_register_required_plugins' );


if ( !function_exists( 'archer_action_xs_admin_scripts' ) ) :

	function archer_action_xs_admin_scripts() {
		wp_enqueue_style( 'iconfonts', ARCHER_CSS . '/icon-font.css', null, ARCHER_VERSION );
		wp_enqueue_style( 'xs-theme', ARCHER_CSS . '/xs_admin.css', null, ARCHER_VERSION );
	}

	add_action( 'admin_enqueue_scripts', 'archer_action_xs_admin_scripts' );

endif;

// Initializing online demo contents
function _filter_archer_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://xpeedstudio.net/demo-content/archer';
	$demos_array			 = array(
		'variant1'	 => array(
			'title'			 => esc_html__( 'Variant1', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant1/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant2'	 => array(
			'title'			 => esc_html__( 'variant2', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant2/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant3'	 => array(
			'title'			 => esc_html__( 'Variant3', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant3/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant4'	 => array(
			'title'			 => esc_html__( 'Variant4', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant4/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant5'	 => array(
			'title'			 => esc_html__( 'Variant5', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant5/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant6'	 => array(
			'title'			 => esc_html__( 'Variant6', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant6/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant7'	 => array(
			'title'			 => esc_html__( 'Variant7', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant7/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant8'	 => array(
			'title'			 => esc_html__( 'Variant8', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant8/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant9'	 => array(
			'title'			 => esc_html__( 'Image Version', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant9/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'variant10'	 => array(
			'title'			 => esc_html__( 'Video Version', 'archer' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/variant10/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		)
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_filter_archer_fw_ext_backups_demos' );






/*
 * GOOGLE FONT
 * since 1.0
 */

if ( !function_exists( '_action_theme_process_google_fonts' ) ) {

	function _action_theme_process_google_fonts() {
		$include_from_google = array();
		$google_fonts		 = fw_get_google_fonts();

		$home_title_h1		 = fw_get_db_settings_option( 'home_title_h1' );
		$home_title_h3		 = fw_get_db_settings_option( 'home_title_h3' );
		$heading_title		 = fw_get_db_settings_option( 'heading_title' );
		$heading_subtitle	 = fw_get_db_settings_option( 'heading_subtitle' );
		$body_font			 = fw_get_db_settings_option( 'body_font' );

		// if is google font
		if ( isset( $google_fonts[ $home_title_h1[ 'family' ] ] ) ) {
			$include_from_google[ $home_title_h1[ 'family' ] ] = $google_fonts[ $home_title_h1[ 'family' ] ];
		}

		if ( isset( $google_fonts[ $home_title_h3[ 'family' ] ] ) ) {
			$include_from_google[ $home_title_h3[ 'family' ] ] = $google_fonts[ $home_title_h3[ 'family' ] ];
		}
		if ( isset( $google_fonts[ $heading_title[ 'family' ] ] ) ) {
			$include_from_google[ $heading_title[ 'family' ] ] = $google_fonts[ $heading_title[ 'family' ] ];
		}
		if ( isset( $google_fonts[ $heading_subtitle[ 'family' ] ] ) ) {
			$include_from_google[ $heading_subtitle[ 'family' ] ] = $google_fonts[ $heading_subtitle[ 'family' ] ];
		}
		if ( isset( $google_fonts[ $body_font[ 'family' ] ] ) ) {
			$include_from_google[ $body_font[ 'family' ] ] = $google_fonts[ $body_font[ 'family' ] ];
		}

		$google_fonts_links = fw_theme_get_remote_fonts( $include_from_google );
		// set a option in db for save google fonts link
		update_option( 'fw_theme_google_fonts_link', $google_fonts_links );
	}

	add_action( 'fw_settings_form_saved', '_action_theme_process_google_fonts', 999, 2 );
}

if ( !function_exists( 'fw_theme_get_remote_fonts' ) ) :

	function fw_theme_get_remote_fonts( $include_from_google ) {
		/**
		 * Get remote fonts
		 * @param array $include_from_google
		 */
		if ( !sizeof( $include_from_google ) ) {
			return '';
		}

		$html = "<link href='http://fonts.googleapis.com/css?family=";

		foreach ( $include_from_google as $font => $styles ) {
			$html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles[ 'variants' ] ) . '|';
		}

		$html = substr( $html, 0, - 1 );
		$html .= "' rel='stylesheet' type='text/css'>";

		return $html;
	}

endif;

if ( !function_exists( '_action_theme_print_google_fonts_link' ) ) :

	function _action_theme_print_google_fonts_link() {
		/**
		 * Print google fonts link
		 */
		$google_fonts_link = get_option( 'fw_theme_google_fonts_link', '' );
		if ( $google_fonts_link != '' ) {
			echo str_replace( "http:", "", $google_fonts_link );
		}
	}

	add_action( 'wp_head', '_action_theme_print_google_fonts_link' );
endif;

//end goole font

