<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package ecommerce_store_elementor
 */

if ( ! function_exists( 'ecommerce_store_elementor_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ecommerce-store-elementor' ); ?></a><?php
	}
endif;

add_action( 'ecommerce_store_elementor_action_before', 'ecommerce_store_elementor_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'ecommerce_store_elementor_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_site_branding() {
	 	$ecommerce_store_elementor_gtranslate_show = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_gtranslate_show' );
		$ecommerce_store_elementor_currency_switcher = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_currency_switcher' );
		$ecommerce_store_elementor_contact_button_link = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_contact_button_link' );
		$ecommerce_store_elementor_contact_button_text = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_contact_button_text' );
		$ecommerce_store_elementor_header_top_text = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_header_top_text' );
		$ecommerce_store_elementor_data_sticky = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_show_data_sticky_setting' );
		$ecommerce_store_elementor_product_search = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_product_search' );
		$ecommerce_store_elementor_account_button = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_account_button' );
		?>

	<header class="main-header">
		<div class="topheader">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5 col-12 align-self-center">
						<?php if ( !empty($ecommerce_store_elementor_gtranslate_show) || !empty($ecommerce_store_elementor_currency_switcher) || !empty($ecommerce_store_elementor_contact_button_link) ):  ?>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-12 align-self-center">
									<?php if ( true == $ecommerce_store_elementor_gtranslate_show ) :  ?>
										<div class="translate-lang ">
											<?php echo do_shortcode( '[gtranslate]' );?>
										</div>
									<?php endif; ?>
								</div>
								<div class="col-lg-4 col-md-4 col-12 align-self-center">
									<?php if (!empty($ecommerce_store_elementor_currency_switcher)) :  ?>
										<?php if(class_exists('woocommerce')){ ?>
											<div class="currency-box ">
												<?php echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]'); ?>
											</div>
										<?php } ?>
									<?php endif; ?>
								</div>
								<div class="col-lg-4 col-md-4 col-12 align-self-center">
									<?php if( !empty($ecommerce_store_elementor_contact_button_link) || !empty($ecommerce_store_elementor_contact_button_text)):?>
										<div class="contact-button">
											<a href="<?php echo esc_url($ecommerce_store_elementor_contact_button_link);?>"><?php echo esc_html($ecommerce_store_elementor_contact_button_text);?></a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-5 col-12 align-self-center">
						<?php if( !empty($ecommerce_store_elementor_header_top_text)):?>
							<p class="mb-0 adv-text"><?php echo esc_html($ecommerce_store_elementor_header_top_text);?></p>
						<?php endif; ?>
					</div>
					<div class="col-lg-2 col-md-2 col-12 align-self-center d-flex justify-content-lg-end justify-content-md-end justify-content-center py-2">
						<?php if(class_exists('woocommerce')){ ?>
							<?php if(defined('YITH_WCWL')){ ?>
								<a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','ecommerce-store-elementor'); ?>"><span class="dashicons dashicons-heart me-3"></span></a>
							<?php }?>
						<?php }?>
						<?php if ( class_exists( 'woocommerce' ) ) {?>
							<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','ecommerce-store-elementor' ); ?>"><span class="dashicons dashicons-cart"></span><span class="cart-item-box"><?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span></a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div id="middle-header" data-sticky= "<?php echo esc_attr($ecommerce_store_elementor_data_sticky); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-12 align-self-center order-md-1 order-1">
						<div class="site-branding mb-3 mb-lg-0">
							<?php ecommerce_store_elementor_the_custom_logo(); ?>
							<?php $ecommerce_store_elementor_show_title = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_show_title' ); ?>
							<?php $ecommerce_store_elementor_show_tagline = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_show_tagline' ); ?>
							<?php if ( true === $ecommerce_store_elementor_show_title || true === $ecommerce_store_elementor_show_tagline ) :  ?>
								<div id="site-identity" class="text-center text-md-center text-lg-start">
									<?php if ( true === $ecommerce_store_elementor_show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $ecommerce_store_elementor_show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-5 col-md-2 col-6 align-self-center order-md-2 order-2">
						<div class="toggle-menu gb_menu text-md-start">
							<button onclick="ecommerce_store_elementor_gb_Menu_open()" class="gb_toggle"><?php esc_html_e('Menu','ecommerce-store-elementor'); ?></button>
						</div>
						<div id="gb_responsive" class="nav side_gb_nav">
							<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'ecommerce-store-elementor' ); ?>">
								<?php
									wp_nav_menu( array( 
										'theme_location' => 'primary-menu',
										'container_class' => 'gb_navigation clearfix' ,
										'menu_class' => 'gb_navigation clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
									) );
								?>
								<a href="javascript:void(0)" class="closebtn gb_menu" onclick="ecommerce_store_elementor_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','ecommerce-store-elementor'); ?></span></a>
							</nav>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-12 align-self-center order-md-3 order-4">
						<?php if( !empty($ecommerce_store_elementor_product_search)):?>
							<div class="search-box">
								<?php if(class_exists('woocommerce')){
									get_product_search_form();
								} ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-lg-2 col-md-3 col-6 align-self-center text-center text-lg-end py-2 order-md-4 order-3">
						<?php if (!empty($ecommerce_store_elementor_account_button)): ?>
							<?php if(class_exists('woocommerce')){ ?>
								<?php if ( is_user_logged_in() ) { ?>
									<div><a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','ecommerce-store-elementor'); ?>"><span class="dashicons dashicons-admin-users me-2"></span><span class="text-start" ><p class="sign-in-text" ><?php esc_html_e( 'Hello sign in','ecommerce-store-elementor' );?></p><p class="account-text" ><?php esc_html_e( 'Account & Lists','ecommerce-store-elementor' );?></p></span></a></div>
								<?php }
								else { ?>
									<a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','ecommerce-store-elementor'); ?>"><span class="dashicons dashicons-admin-users me-2"></span><?php esc_html_e( 'Login / Register','ecommerce-store-elementor' );?></a>
								<?php } ?>
							<?php }?>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php

	}

endif;

add_action( 'ecommerce_store_elementor_action_header', 'ecommerce_store_elementor_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'ecommerce_store_elementor_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_footer_copyright() {

		// Check if footer is disabled.
		$ecommerce_store_elementor_footer_status = apply_filters( 'ecommerce_store_elementor_filter_footer_status', true );
		if ( true !== $ecommerce_store_elementor_footer_status ) {
			return;
		}

		// Copyright content.
		$ecommerce_store_elementor_copyright_text = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_copyright_text' );
		$ecommerce_store_elementor_copyright_text = apply_filters( 'ecommerce_store_elementor_filter_copyright_text', $ecommerce_store_elementor_copyright_text );
		if ( ! empty( $ecommerce_store_elementor_copyright_text ) ) {
			$ecommerce_store_elementor_copyright_text = wp_kses_data( $ecommerce_store_elementor_copyright_text );
		}

		// Powered by content.
		$ecommerce_store_elementor_powered_by_text = sprintf( __( 'Ecommerce Store Elementor by %s', 'ecommerce-store-elementor' ), '<span>' . __( 'Mizan Themes', 'ecommerce-store-elementor' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $ecommerce_store_elementor_copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
			    		<?php echo $ecommerce_store_elementor_copyright_text; ?>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $ecommerce_store_elementor_powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
					<a href="<?php echo esc_url('https://www.mizanthemes.com/products/free-ecommerce-wordpress-theme/','ecommerce-store-elementor'); ?>"><?php echo $ecommerce_store_elementor_powered_by_text; ?></a>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>
		</div><!-- .colophon-inner -->
		
	    <?php
	}

endif;

add_action( 'ecommerce_store_elementor_action_footer', 'ecommerce_store_elementor_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////

if ( ! function_exists( 'ecommerce_store_elementor_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_add_sidebar() {

		global $post;

		$ecommerce_store_elementor_global_layout = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_global_layout' );
		$ecommerce_store_elementor_global_layout = apply_filters( 'ecommerce_store_elementor_filter_theme_global_layout', $ecommerce_store_elementor_global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$ecommerce_store_elementor_post_options = get_post_meta( $post->ID, 'ecommerce_store_elementor_theme_settings', true );
			if ( isset( $ecommerce_store_elementor_post_options['post_layout'] ) && ! empty( $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'] ) ) {
				$ecommerce_store_elementor_global_layout = $ecommerce_store_elementor_post_options['ecommerce_store_elementor_post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $ecommerce_store_elementor_global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $ecommerce_store_elementor_global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

		// Include Secondary sidebar 1.
		switch ( $ecommerce_store_elementor_global_layout ) {
			case 'four-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'ecommerce_store_elementor_action_sidebar', 'ecommerce_store_elementor_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'ecommerce_store_elementor_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'ecommerce_store_elementor_theme_settings', true );
			$ecommerce_store_elementor_theme_settings_single_image = isset( $values['ecommerce_store_elementor_single_image'] ) ? esc_attr( $values['ecommerce_store_elementor_single_image'] ) : '';

			if ( ! $ecommerce_store_elementor_theme_settings_single_image ) {
				$ecommerce_store_elementor_theme_settings_single_image = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_single_image' );
			}

			if ( 'disable' !== $ecommerce_store_elementor_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $ecommerce_store_elementor_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'ecommerce_store_elementor_single_image', 'ecommerce_store_elementor_add_image_in_single_display' );

if ( ! function_exists( 'ecommerce_store_elementor_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function ecommerce_store_elementor_footer_goto_top() {
        
        $ecommerce_store_elementor_show_scroll_to_top = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_show_scroll_to_top' );
        if ( true === $ecommerce_store_elementor_show_scroll_to_top ) :
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"><span class="screen-reader-text">' . esc_html__( 'Scroll Up', 'ecommerce-store-elementor' ) . '</span></i></a>';
		endif;

	}

endif;

add_action( 'ecommerce_store_elementor_action_after', 'ecommerce_store_elementor_footer_goto_top', 20 );