<?php
/**
 * Admin Notice Function Class for the Ecommerce Store Elementor Theme.
 */
class Ecommerce_Store_Elementor_Admin_Notice_Function {

    /**
     * Initializes the theme and sets up necessary actions.
     */
    public function __construct() {
        // Hook to run the reset_notification_dismissal method after switching the theme
        add_action('after_switch_theme', array($this, 'ecommerce_store_elementor_notice_dismissal'));

        $this->ecommerce_store_elementor_check_admin_notice_function();
    }
    public function ecommerce_store_elementor_check_admin_notice_function() {
        // Add necessary actions for compatibility check
        add_action('admin_notices', array($this, 'ecommerce_store_elementor_compatible_check_admin'));
        add_action('admin_footer', array($this, 'ecommerce_store_elementor_dashboard_notice_script'));
        add_action('wp_ajax_dismiss_ecommerce_store_elementor_notification', array($this, 'ecommerce_store_elementor_dismiss_notice_ajax_handler'));
       
    }

    /**
     * Resets the notification dismissal state when the theme is activated.
     */
    public function ecommerce_store_elementor_notice_dismissal() {
        delete_transient('ecommerce_store_elementor_notice_dismissed');
    }

    /**
     * Checks compatibility and displays a notification if not dismissed.
     */
    public function ecommerce_store_elementor_compatible_check_admin() {
        // Check if the notification has been dismissed
        $dismissed = get_transient('ecommerce_store_elementor_notice_dismissed');
        if ($dismissed !== '1') {
            // Include the admin notice template
            include_once dirname(__FILE__) . '/../inc/notice/admin-notice.php';
        }
    }

    /**
     * Dismisses the notification and sets the dismissal state via AJAX.
     */
    public function ecommerce_store_elementor_dismiss_notice_ajax_handler() {
        // Check AJAX nonce for security
        check_ajax_referer('ecommerce_store_elementor_dismiss_notice_nonce', 'nonce');
        // Call the dismiss_notification method
        $this->ecommerce_store_elementor_dismiss_notice();
        // Send a success response
        echo 'success';
        // Terminate the request
        wp_die();
    }

    /**
     * Dismisses the notification by setting the dismissal state in a transient for 7 days.
     */
    public function ecommerce_store_elementor_dismiss_notice() {
        // Set the notification dismissal state in a transient for 7 days
        set_transient('ecommerce_store_elementor_notice_dismissed', '1', 7 * DAY_IN_SECONDS);
    }

    /**
     * Enqueues the admin notice script to handle dismissal via AJAX.
     */
    public function ecommerce_store_elementor_dashboard_notice_script() {
        ?>
        <script>
            (function ($) {
                // Handle click event on notice dismiss button
                $(document).on('click', '.notice.is-dismissible .notice-dismiss', function () {
                    // Send AJAX request to dismiss the notification
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'dismiss_ecommerce_store_elementor_notification',
                            nonce: '<?php echo wp_create_nonce('ecommerce_store_elementor_dismiss_notice_nonce'); ?>'
                        }
                    });
                });
            })(jQuery);
        </script>
        <?php
    }
}

// Instantiate the Ecommerce Store Elementor Admin Notice Function class
new Ecommerce_Store_Elementor_Admin_Notice_Function();
?>
