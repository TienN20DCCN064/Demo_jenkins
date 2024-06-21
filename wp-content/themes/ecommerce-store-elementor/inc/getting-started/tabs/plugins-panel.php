<?php
/**
 * Plugin Panel.
 *
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
    <div id="Mizan_Demo_Importor_editor" class="tabcontent">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Ecommerce_Store_Elementor_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $ecommerce_store_elementor_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="ecommerce-store-elementor-recommended-plugins ">
                    <div class="ecommerce-store-elementor-action-list">
                        <?php if ($ecommerce_store_elementor_actions): foreach ($ecommerce_store_elementor_actions as $key => $ecommerce_store_elementor_actionValue): ?>
                                <div class="ecommerce-store-elementor-action" id="<?php echo esc_attr($ecommerce_store_elementor_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h4 class="action-title"><?php echo esc_html($ecommerce_store_elementor_actionValue['title']); ?></h4>
                                        <div class="action-desc"><?php echo esc_html($ecommerce_store_elementor_actionValue['desc']); ?></div>
                                        <?php echo wp_kses_post($ecommerce_store_elementor_actionValue['link']); ?>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
            </div>
        <?php }else{ ?>
            <div class="tab-outer-box">
                <h2><?php esc_html_e( 'Welcome to Mizan Theme!', 'ecommerce-store-elementor' ); ?></h2>
                <p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '1. Install Mizan Demo Importor', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '2. Activate Mizan Demo Importor ', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '>> Click on the start now button', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '>> Click install plugins', 'ecommerce-store-elementor' ); ?></p>
                <p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'ecommerce-store-elementor' ); ?></p>
            </div>
        <?php } ?>
    </div>
</div><!-- .panel-left -->