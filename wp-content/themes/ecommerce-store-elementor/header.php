<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce_store_elementor
 */

?>
<?php
	/**
	 * Hook - ecommerce_store_elementor_action_doctype.
	 *
	 * @hooked ecommerce_store_elementor_doctype -  10
	 */
	do_action( 'ecommerce_store_elementor_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - ecommerce_store_elementor_action_head.
	 *
	 * @hooked ecommerce_store_elementor_head -  10
	 */
	do_action( 'ecommerce_store_elementor_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php 
	$ecommerce_store_elementor_show_preloader = ecommerce_store_elementor_get_option( 'ecommerce_store_elementor_show_preloader_setting' );
        if ( true === $ecommerce_store_elementor_show_preloader ) : ?>
			<div id="preloader" class="loader-head">
				<div class="preloader">
				    <div class="spinner"></div>
				    <div class="spinner-2"></div>
				</div>
			</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook - ecommerce_store_elementor_action_before.
	 *
	 * @hooked ecommerce_store_elementor_page_start - 10
	 * @hooked ecommerce_store_elementor_skip_to_content - 15
	 */
	do_action( 'ecommerce_store_elementor_action_before' );
	?>

    <?php
	  /**
	   * Hook - ecommerce_store_elementor_action_before_header.
	   *
	   * @hooked ecommerce_store_elementor_header_start - 10
	   */
	  do_action( 'ecommerce_store_elementor_action_before_header' );
	?>
		<?php
		/**
		 * Hook - ecommerce_store_elementor_action_header.
		 *
		 * @hooked ecommerce_store_elementor_site_branding - 10
		 */
		do_action( 'ecommerce_store_elementor_action_header' );
		?>
    <?php
	  /**
	   * Hook - ecommerce_store_elementor_action_after_header.
	   *
	   * @hooked ecommerce_store_elementor_header_end - 10
	   */
	  do_action( 'ecommerce_store_elementor_action_after_header' );
	?>

	<?php
	/**
	 * Hook - ecommerce_store_elementor_action_before_content.
	 *
	 * @hooked ecommerce_store_elementor_content_start - 10
	 */
	do_action( 'ecommerce_store_elementor_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - ecommerce_store_elementor_action_content.
	   */
	  do_action( 'ecommerce_store_elementor_action_content' );
	?> -->