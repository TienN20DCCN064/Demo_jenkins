<?php
/**
 * Basic theme functions.
 *
 * This file contains hook functions attached to core hooks.
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_implement_excerpt_length' ) ) :

	/**
	 * Implement excerpt length.
	 *
	 * @since 1.0.0
	 *
	 * @param int $length The number of words.
	 * @return int Excerpt length.
	 */
	function ecommerce_store_elementor_implement_excerpt_length( $length ) {

		$ecommerce_store_elementor_excerpt_length = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_excerpt_length' );
		$ecommerce_store_elementor_excerpt_length = apply_filters( 'ecommerce_store_elementor_filter_excerpt_length', $ecommerce_store_elementor_excerpt_length );

		if ( absint( $ecommerce_store_elementor_excerpt_length ) > 0 ) {
			$length = absint( $ecommerce_store_elementor_excerpt_length );
		}

		return $length;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_implement_read_more' ) ) :

	/**
	 * Implement read more in excerpt
	 *
	 * @since 1.0.0
	 *
	 * @param string $more The string shown within the more link.
	 * @return string The excerpt.
	 */
	function ecommerce_store_elementor_implement_read_more( $more ) {

		$ecommerce_store_elementor_flag_apply_excerpt_read_more = apply_filters( 'ecommerce_store_elementor_filter_excerpt_read_more', true );
		if ( true !== $ecommerce_store_elementor_flag_apply_excerpt_read_more ) {
			return $more;
		}

		$output = $more;
		$ecommerce_store_elementor_read_more_text = ecommerce_store_elementor_get_option( 'read_more_text' );
		if ( ! empty( $ecommerce_store_elementor_read_more_text ) ) {
			$output = ' <a href="'. esc_url( get_permalink() ) . '" class="read-more">' . esc_html( $ecommerce_store_elementor_read_more_text ) . '</a>';
			$output = apply_filters( 'ecommerce_store_elementor_filter_read_more_link' , $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_content_more_link' ) ) :

	/**
	 * Implement read more in content.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more_link Read More link element.
	 * @param string $more_link_text Read More text.
	 * @return string Link.
	 */
	function ecommerce_store_elementor_content_more_link( $ecommerce_store_elementor_more_link, $ecommerce_store_elementor_more_link_text ) {

		$ecommerce_store_elementor_flag_apply_excerpt_read_more = apply_filters( 'ecommerce_store_elementor_filter_excerpt_read_more', true );
		if ( true !== $ecommerce_store_elementor_flag_apply_excerpt_read_more ) {
			return $ecommerce_store_elementor_more_link;
		}

		$ecommerce_store_elementor_read_more_text = ecommerce_store_elementor_get_option( 'read_more_text' );
		if ( ! empty( $ecommerce_store_elementor_read_more_text ) ) {
			$ecommerce_store_elementor_more_link = str_replace( $ecommerce_store_elementor_more_link_text, esc_html( $ecommerce_store_elementor_read_more_text ), $ecommerce_store_elementor_more_link );
		}
		return $ecommerce_store_elementor_more_link;

	}

endif;

if ( ! function_exists( 'ecommerce_store_elementor_custom_body_class' ) ) :
	/**
	 * Custom body class
	 *
	 * @since 1.0.0
	 *
	 * @param string|array $input One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ecommerce_store_elementor_custom_body_class( $input ) {

		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$input[] = 'group-blog';
		}

		$ecommerce_store_elementor_home_content_status =	ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_home_content_status' );
		if( true !== $ecommerce_store_elementor_home_content_status ){
			$input[] = 'home-content-not-enabled';
		}

		// Global layout.
		global $post;
		$ecommerce_store_elementor_global_layout = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_global_layout' );
		$ecommerce_store_elementor_global_layout = apply_filters( 'ecommerce_store_elementor_filter_theme_global_layout', $ecommerce_store_elementor_global_layout );

		// Check if single.
		if ( $post  && is_singular() ) {
			$ecommerce_store_elementor_post_options = get_post_meta( $post->ID, 'ecommerce_store_elementor_theme_settings', true );
			if ( isset( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] ) && ! empty( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] ) ) {
				$ecommerce_store_elementor_global_layout = $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'];
			}
		}

		$input[] = 'global-layout-' . esc_attr( $ecommerce_store_elementor_global_layout );

		// Common class for three columns.
		switch ( $ecommerce_store_elementor_global_layout ) {
		  case 'three-columns':
		    $input[] = 'three-columns-enabled';
		    break;

		  default:
		    break;
		}

		// Common class for four columns.
		switch ( $ecommerce_store_elementor_global_layout ) {
		  case 'four-columns':
		    $input[] = 'four-columns-enabled';
		    break;

		  default:
		    break;
		}

		$ecommerce_store_elementor_flag_apply_slider = apply_filters( 'ecommerce_store_elementor_filter_slider_status', false );

		if ( true === $ecommerce_store_elementor_flag_apply_slider ) {
			$input[] = 'slider-enabled';
		}
		else {
			$input[] = 'slider-disabled';
		}

		return $input;

	}
endif;

add_filter( 'body_class', 'ecommerce_store_elementor_custom_body_class' );

if ( ! function_exists( 'ecommerce_store_elementor_featured_image_instruction' ) ) :

	/**
	 * Message to show in the Featured Image Meta box.
	 *
	 * @since 1.0.0
	 *
	 * @param string $content Admin post thumbnail HTML markup.
	 * @param int    $post_id Post ID.
	 * @return string HTML.
	 */
	function ecommerce_store_elementor_featured_image_instruction( $content, $post_id ) {

		$allowed = array( 'post', 'page' );
		if ( in_array( get_post_type( $post_id ), $allowed ) ) {
			$content .= '<strong>' . __( 'Recommended Image Sizes', 'ecommerce-store-elementor' ) . ':</strong><br/>';
			$content .= __( 'Slider Image', 'ecommerce-store-elementor' ) . ' : 1350px X 590px';
		}

		return $content;

	}

endif;
add_filter( 'admin_post_thumbnail_html', 'ecommerce_store_elementor_featured_image_instruction', 10, 2 );

if ( ! function_exists( 'ecommerce_store_elementor_custom_content_width' ) ) :

	/**
	 * Custom content width.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_custom_content_width() {

		global $post, $wp_query, $content_width;

		$ecommerce_store_elementor_global_layout = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_global_layout' );
		$ecommerce_store_elementor_global_layout = apply_filters( 'ecommerce_store_elementor_filter_theme_global_layout', $ecommerce_store_elementor_global_layout );

		// Check if single.
		if ( $post  && is_singular() ) {
		  $ecommerce_store_elementor_post_options = get_post_meta( $post->ID, 'ecommerce_store_elementor_theme_settings', true );
		  if ( isset( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] ) && ! empty( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] ) ) {
		    $ecommerce_store_elementor_global_layout = esc_attr( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] );
		  }
		}
		switch ( $ecommerce_store_elementor_global_layout ) {

			case 'no-sidebar':
				$content_width = 1140;
				break;

			case 'three-columns':
				$content_width = 525;
				break;

			case 'four-columns':
				$content_width = 525;
				break;

			case 'left-sidebar':
			case 'right-sidebar':
				$content_width = 771;
				break;

			default:
				break;
		}

	}
endif;

add_filter( 'template_redirect', 'ecommerce_store_elementor_custom_content_width' );

if ( ! function_exists( 'ecommerce_store_elementor_hook_read_more_filters' ) ) :

	/**
	 * Hook read more filters.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_hook_read_more_filters() {
		if ( is_home() || is_category() || is_tag() || is_author() || is_date() ) {

			add_filter( 'excerpt_length', 'ecommerce_store_elementor_implement_excerpt_length', 999 );
			add_filter( 'the_content_more_link', 'ecommerce_store_elementor_content_more_link', 10, 2 );
			add_filter( 'excerpt_more', 'ecommerce_store_elementor_implement_read_more' );

		}
	}
endif;

add_action( 'wp', 'ecommerce_store_elementor_hook_read_more_filters' );
