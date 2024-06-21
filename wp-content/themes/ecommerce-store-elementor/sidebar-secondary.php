<?php
/**
 * The Secondary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce_store_elementor
 */

?>
<?php $ecommerce_store_elementor_default_sidebar = apply_filters( 'ecommerce_store_elementor_filter_default_sidebar_id', 'sidebar-2', 'secondary' ); ?>
<div id="sidebar-secondary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $ecommerce_store_elementor_default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $ecommerce_store_elementor_default_sidebar ); ?>
	<?php else : ?>
		<?php
			do_action( 'ecommerce_store_elementor_action_default_sidebar', $ecommerce_store_elementor_default_sidebar, 'secondary' );
		?>
	<?php endif ?>
</div>

<?php $ecommerce_store_elementor_default_sidebar1 = apply_filters( 'ecommerce_store_elementor_filter_default_sidebar_id1', 'sidebar-3', 'secondary' ); ?>
<div id="sidebar-secondary1" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $ecommerce_store_elementor_default_sidebar1 ) ) : ?>
		<?php dynamic_sidebar( $ecommerce_store_elementor_default_sidebar1 ); ?>
	<?php else : ?>
		<?php
			do_action( 'ecommerce_store_elementor_action_default_sidebar1', $ecommerce_store_elementor_default_sidebar1, 'secondary' );
		?>
	<?php endif ?>
</div>