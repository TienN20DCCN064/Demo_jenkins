<?php
/**
 * Start Elementor.
 *
 */
?>
<!-- Start Elementor -->
<div id="start-panel" class="panel-left visible">
    <div id="ecommerce-store-elementor-importer" class="tabcontent open">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Ecommerce_Store_Elementor_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $ecommerce_store_elementor_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="ecommerce-store-elementor-recommended-plugins ">
                <div class="ecommerce-store-elementor-action-list">
                    <?php if ($ecommerce_store_elementor_actions): foreach ($ecommerce_store_elementor_actions as $key => $ecommerce_store_elementor_actionValue): ?>
                            <div class="ecommerce-store-elementor-action" id="<?php echo esc_attr($ecommerce_store_elementor_actionValue['id']);?>">
                                <div class="action-inner plugin-activation-redirect">
                                    <h3 class="action-title"><?php echo esc_html($ecommerce_store_elementor_actionValue['title']); ?></h3>
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
                <h3><?php esc_html_e('Welcome to Mizan Themes', 'ecommerce-store-elementor'); ?></h3>
                <p class="start-text"><?php esc_html_e('The demo will import after you click the Start Quickly button.', 'ecommerce-store-elementor'); ?></p>
                <div class="info-link">
                    <a class="button button-primary" href="<?php echo esc_url( admin_url('admin.php?page=mizandemoimporter-wizard') ); ?>"><?php esc_html_e('Start Quickly', 'ecommerce-store-elementor'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
