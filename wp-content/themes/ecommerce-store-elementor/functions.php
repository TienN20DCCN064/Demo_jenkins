<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecommerce_store_elementor_setup() {
		/*
		 * Make theme available for translation.
		 */ 
		load_theme_textdomain( 'ecommerce-store-elementor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'ecommerce-store-elementor-thumb', 400, 300 );

		// Register nav menu locations.
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary Menu', 'ecommerce-store-elementor' ),
		) );

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( '/css/editor-style' . $min . '.css', ecommerce_store_elementor_fonts_url() ) );

		/*
		 * Switch default core markup to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ecommerce_store_elementor_custom_background_args', array(
			'default-color' => 'f7fcfe',
		) ) );

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// woocommerce
		add_theme_support( 'woocommerce' );

		// Load Supports.
		require_once get_template_directory() . '/inc/support.php';

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'ecommerce-store-elementor' ),
					'shortName' => __( 'S', 'ecommerce-store-elementor' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'ecommerce-store-elementor' ),
					'shortName' => __( 'M', 'ecommerce-store-elementor' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'ecommerce-store-elementor' ),
					'shortName' => __( 'L', 'ecommerce-store-elementor' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'ecommerce-store-elementor' ),
					'shortName' => __( 'XL', 'ecommerce-store-elementor' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Black', 'ecommerce-store-elementor' ),
					'slug'  => 'black',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'White', 'ecommerce-store-elementor' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => __( 'Gray', 'ecommerce-store-elementor' ),
					'slug'  => 'gray',
					'color' => '#727272',
				),
				array(
					'name'  => __( 'Blue', 'ecommerce-store-elementor' ),
					'slug'  => 'blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Navy Blue', 'ecommerce-store-elementor' ),
					'slug'  => 'navy-blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Light Blue', 'ecommerce-store-elementor' ),
					'slug'  => 'light-blue',
					'color' => '#f7fcfe',
				),
				array(
					'name'  => __( 'Orange', 'ecommerce-store-elementor' ),
					'slug'  => 'orange',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Green', 'ecommerce-store-elementor' ),
					'slug'  => 'green',
					'color' => '#77a464',
				),
				array(
					'name'  => __( 'Red', 'ecommerce-store-elementor' ),
					'slug'  => 'red',
					'color' => '#e4572e',
				),
				array(
					'name'  => __( 'Yellow', 'ecommerce-store-elementor' ),
					'slug'  => 'yellow',
					'color' => '#f4a024',
				),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'ecommerce_store_elementor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecommerce_store_elementor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ecommerce_store_elementor_content_width', 771 );
}
add_action( 'after_setup_theme', 'ecommerce_store_elementor_content_width', 0 );

/**
 * Register widget area.
 */
function ecommerce_store_elementor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'ecommerce-store-elementor' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'ecommerce-store-elementor' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'ecommerce-store-elementor' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'ecommerce-store-elementor' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar 1', 'ecommerce-store-elementor' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar 1.', 'ecommerce-store-elementor' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ecommerce_store_elementor_widgets_init' );

/**
 * Register custom fonts.
 */
function ecommerce_store_elementor_fonts_url() {
	$font_family   = array(
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200..1000;1,200..1000',
	);
	
	$ecommerce_store_elementor_fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $ecommerce_store_elementor_fonts_url ) );
	return $contents;
}

/**
 * Enqueue scripts and styles.
 */
function ecommerce_store_elementor_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'ecommerce-store-elementor-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$ecommerce_store_elementor_fonts_url = ecommerce_store_elementor_fonts_url();
	if ( ! empty( $ecommerce_store_elementor_fonts_url ) ) {
		wp_enqueue_style( 'ecommerce-store-elementor-google-fonts', $ecommerce_store_elementor_fonts_url, array(), null );
	}

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');

	// Theme stylesheet.
	wp_enqueue_style( 'ecommerce-store-elementor-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );

	wp_enqueue_style( 'ecommerce-store-elementor-style', get_stylesheet_uri() );
	wp_style_add_data( 'ecommerce-store-elementor-style', 'rtl', 'replace' );

	// Theme block stylesheet.
	wp_enqueue_style( 'ecommerce-store-elementor-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'ecommerce-store-elementor-style' ), '20211006' );
	
	wp_enqueue_script( 'ecommerce-store-elementor-custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecommerce_store_elementor_scripts' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Ecommerce Store Elementor
 */
function ecommerce_store_elementor_block_editor_styles() {
	// Theme block stylesheet.
	wp_enqueue_style( 'ecommerce-store-elementor-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20101208' );

	$ecommerce_store_elementor_fonts_url = ecommerce_store_elementor_fonts_url();
	if ( ! empty( $ecommerce_store_elementor_fonts_url ) ) {
		wp_enqueue_style( 'ecommerce-store-elementor-google-fonts', $ecommerce_store_elementor_fonts_url, array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'ecommerce_store_elementor_block_editor_styles' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

// Dashboard Admin Info
require get_template_directory() . '/inc/dashboard-admin-info.php';

/**
 *  Webfonts 
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

require_once get_template_directory() . '/inc/recommendations/tgm.php';

require_once get_template_directory() . '/inc/upsell/class-upgrade-pro.php';

require get_template_directory() . '/inc/getting-started/getting-started.php';

require get_template_directory() . '/inc/getting-started/plugin-activation.php';

define('ECOMMERCE_STORE_ELEMENTOR_DOCUMENTATION',__('https://preview.mizanthemes.com/setup-guide/ecommerce-store-elementor-free/','ecommerce-store-elementor'));
define('ECOMMERCE_STORE_ELEMENTOR_SUPPORT',__('https://wordpress.org/support/theme/ecommerce-store-elementor/','ecommerce-store-elementor'));
define('ECOMMERCE_STORE_ELEMENTOR_REVIEW',__('https://wordpress.org/support/theme/ecommerce-store-elementor/reviews/','ecommerce-store-elementor'));
define('ECOMMERCE_STORE_ELEMENTOR_BUY_NOW',__('https://www.mizanthemes.com/products/ecommerce-store-wordpress-theme/','ecommerce-store-elementor'));
define('ECOMMERCE_STORE_ELEMENTOR_LIVE_DEMO',__('https://preview.mizanthemes.com/ecommerce-store-elementor/','ecommerce-store-elementor'));
define('ECOMMERCE_STORE_ELEMENTOR_PRO_DOC',__('https://preview.mizanthemes.com/setup-guide/ecommerce-store-elementor-pro/','ecommerce-store-elementor'));