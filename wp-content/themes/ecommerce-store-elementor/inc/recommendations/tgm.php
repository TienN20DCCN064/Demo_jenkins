<?php

require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function ecommerce_store_elementor_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'ecommerce-store-elementor' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Royal Elementor Addons and Templates', 'ecommerce-store-elementor' ),
			'slug'             => 'royal-elementor-addons',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Prime Slider – Addons For Elementor', 'ecommerce-store-elementor' ),
			'slug'             => 'bdthemes-prime-slider-lite',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'ecommerce-store-elementor' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'GTranslate', 'ecommerce-store-elementor' ),
			'slug'             => 'gtranslate',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Currency Switcher for WooCommerce', 'ecommerce-store-elementor' ),
			'slug'             => 'currency-switcher-woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'ecommerce-store-elementor' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	ecommerce_store_elementor_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'ecommerce_store_elementor_register_recommended_plugins' );