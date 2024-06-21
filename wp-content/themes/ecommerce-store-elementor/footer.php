<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce_store_elementor
 */

	/**
	 * Hook - ecommerce_store_elementor_action_after_content.
	 *
	 * @hooked ecommerce_store_elementor_content_end - 10
	 */
	do_action( 'ecommerce_store_elementor_action_after_content' );
?>

	<?php
	/**
	 * Hook - ecommerce_store_elementor_action_before_footer.
	 *
	 * @hooked ecommerce_store_elementor_add_footer_bottom_widget_area - 5
	 * @hooked ecommerce_store_elementor_footer_start - 10
	 */
	do_action( 'ecommerce_store_elementor_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - ecommerce_store_elementor_action_footer.
	   *
	   * @hooked ecommerce_store_elementor_footer_copyright - 10
	   */
	  do_action( 'ecommerce_store_elementor_action_footer' );
	?>
	<?php
	/**
	 * Hook - ecommerce_store_elementor_action_after_footer.
	 *
	 * @hooked ecommerce_store_elementor_footer_end - 10
	 */
	do_action( 'ecommerce_store_elementor_action_after_footer' );
	?>

<?php
	/**
	 * Hook - ecommerce_store_elementor_action_after.
	 *
	 * @hooked ecommerce_store_elementor_page_end - 10
	 * @hooked ecommerce_store_elementor_footer_goto_top - 20
	 */
	do_action( 'ecommerce_store_elementor_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
