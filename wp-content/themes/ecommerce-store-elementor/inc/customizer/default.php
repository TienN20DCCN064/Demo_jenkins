<?php
/**
 * Default theme options.
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function ecommerce_store_elementor_get_default_theme_options() {

		$defaults = array();

		//General Option
        $defaults['ecommerce_store_elementor_show_scroll_to_top']          = true;
        $defaults['ecommerce_store_elementor_show_preloader_setting']      = false;
        $defaults['ecommerce_store_elementor_show_data_sticky_setting']    = false;

        //Post Option
        $defaults['ecommerce_store_elementor_show_post_date_setting']         		 = true;
        $defaults['ecommerce_store_elementor_show_post_heading_setting']      		 = true;
        $defaults['ecommerce_store_elementor_show_post_content_setting']       		 = true;
        $defaults['ecommerce_store_elementor_show_post_admin_setting']         		 = true;
        $defaults['ecommerce_store_elementor_show_post_categories_setting']    		 = true;
        $defaults['ecommerce_store_elementor_show_post_comments_setting']    	 	 = true;
        $defaults['ecommerce_store_elementor_show_post_featured_image_setting']   	 = true;
        $defaults['ecommerce_store_elementor_show_post_tags_setting']    			 = true;

		// Header.
		$defaults['ecommerce_store_elementor_show_title']            = true;
		$defaults['ecommerce_store_elementor_show_tagline']          = false;
		$defaults['ecommerce_store_elementor_gtranslate_show'] 		= false;
		$defaults['ecommerce_store_elementor_currency_switcher']     = false;
		$defaults['ecommerce_store_elementor_product_search']     	= true;
		$defaults['ecommerce_store_elementor_account_button']     	= true;
		
		// Layout.
		$defaults['ecommerce_store_elementor_global_layout']           = 'right-sidebar';
		$defaults['ecommerce_store_elementor_archive_layout']          = 'excerpt';
		$defaults['ecommerce_store_elementor_archive_image']           = 'large';
		$defaults['ecommerce_store_elementor_archive_image_alignment'] = 'center';
		$defaults['ecommerce_store_elementor_single_image']            = 'large';

		// Home Page.
		$defaults['ecommerce_store_elementor_home_content_status'] = true;
		
		// Footer.
		$defaults['ecommerce_store_elementor_copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'ecommerce-store-elementor' );
		
		// Pass through filter.
		$defaults = apply_filters( 'ecommerce_store_elementor_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
