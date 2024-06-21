<?php
$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_ecommerce-store-elementor-getting-started' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-success is-dismissible ecommerce-store-elementor-admin-notice">
	<div class="ecommerce-store-elementor-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Thank you for selecting ', 'ecommerce-store-elementor' ); ?> <?php echo $theme->get( 'Name' ); ?> <?php esc_html_e( 'Theme!', 'ecommerce-store-elementor' ); ?></h2>
		<p><?php esc_html_e( 'Explore the benefits of our simple Demo Importer and automatic Plugin Installation. Click the button below to begin.', 'ecommerce-store-elementor' ); ?></p>
		<span class="admin-2-btn" >
			<a class="button-secondary" style="margin-bottom: 15px; margin-right: 10px; " href="<?php echo esc_url( admin_url( 'themes.php?page=ecommerce-store-elementor-getting-started' ) ); ?>"><?php esc_html_e( 'Import Theme Demo', 'ecommerce-store-elementor' ); ?></a>
	        <a class="button-primary" style="margin-bottom: 15px; " href="<?php echo esc_url('https://www.mizanthemes.com/products/ecommerce-store-wordpress-theme/'); ?>" target="_blank"><?php esc_html_e('Get Ecommerce Store Elementor Pro', 'ecommerce-store-elementor'); ?></a>
        </span>
	</div>
</div>