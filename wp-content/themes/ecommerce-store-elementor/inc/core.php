<?php
/**
 * Core functions.
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function ecommerce_store_elementor_get_option( $key ) {

		$ecommerce_store_elementor_default_options = ecommerce_store_elementor_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$ecommerce_store_elementor_theme_options = (array)get_theme_mod( 'theme_options' );
		$ecommerce_store_elementor_theme_options = wp_parse_args( $ecommerce_store_elementor_theme_options, $ecommerce_store_elementor_default_options );

		$ecommerce_store_elementor_value = null;

		if ( isset( $ecommerce_store_elementor_theme_options[ $key ] ) ) {
			$ecommerce_store_elementor_value = $ecommerce_store_elementor_theme_options[ $key ];
		}

		return $ecommerce_store_elementor_value;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_get_options' ) ) :

	/**
	 * Get all theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Theme options.
	 */
  function ecommerce_store_elementor_get_options() {

    $ecommerce_store_elementor_default_options = ecommerce_store_elementor_get_default_theme_options();
    $ecommerce_store_elementor_theme_options = (array)get_theme_mod( 'theme_options' );
    $ecommerce_store_elementor_theme_options = wp_parse_args( $ecommerce_store_elementor_theme_options, $ecommerce_store_elementor_default_options );
    return $ecommerce_store_elementor_theme_options;

  }

endif;

if( ! function_exists( 'ecommerce_store_elementor_exclude_category_in_blog_page' ) ) :

  /**
   * Exclude category in blog page.
   *
   * @since 1.0
   */
  function ecommerce_store_elementor_exclude_category_in_blog_page( $query ) {

    if( $query->is_home && $query->is_main_query()   ) {
      $ecommerce_store_elementor_exclude_categories = ecommerce_store_elementor_get_option( 'exclude_categories' );
      if ( ! empty( $ecommerce_store_elementor_exclude_categories ) ) {
        $cats = explode( ',', $ecommerce_store_elementor_exclude_categories );
        $cats = array_filter( $cats, 'is_numeric' );
        $ecommerce_store_elementor_string_exclude = '';
        if ( ! empty( $cats ) ) {
          $ecommerce_store_elementor_string_exclude = '-' . implode( ',-', $cats);
          $query->set( 'cat', $ecommerce_store_elementor_string_exclude );
        }
      }
    }
    return $query;
  }

endif;

add_filter( 'pre_get_posts', 'ecommerce_store_elementor_exclude_category_in_blog_page' );
