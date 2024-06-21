<?php
/**
 * Customizer partials.
 *
 * @package ecommerce_store_elementor
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ecommerce_store_elementor_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ecommerce_store_elementor_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ecommerce_store_elementor_render_partial_copyright_text() {

	$ecommerce_store_elementor_copyright_text = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_copyright_text' );
	$ecommerce_store_elementor_copyright_text = apply_filters( 'ecommerce_store_elementor_filter_copyright_text', $ecommerce_store_elementor_copyright_text );
	if ( ! empty( $ecommerce_store_elementor_copyright_text ) ) {
		$ecommerce_store_elementor_copyright_text = wp_kses_data( $ecommerce_store_elementor_copyright_text );
	}
	echo $ecommerce_store_elementor_copyright_text;

}
