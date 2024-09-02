<?php
/*
Plugin Name: WooCommerce Order Completion Date Adjuster
Plugin URI: https://github.com/louisisaacdiouf/woocommerce-order-completion-date-adjuster
Description: Adjusts the order date in WooCommerce to the date the order is marked as completed.
Version: 1.0.0
Author: Louis Isaac Diouf
Author URI: https://github.com/louisisaacdiouf
License: GPLv2 or later
Text Domain: woocommerce-order-completion-date-adjuster
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class WC_Order_Completion_Date_Adjuster {

    public function __construct() {
        add_action('woocommerce_order_status_completed', [$this, 'update_order_completion_date']);
    }

    public function update_order_completion_date($order_id) {
        // Récupérer la commande
        $order = wc_get_order($order_id);

        if ($order) {
            // Mettre à jour la date de fin de commande à la date actuelle
            $order->set_date_completed(current_time('mysql'));
            $order->save();
        }
    }
}

// Initialisation du plugin
function wc_order_completion_date_adjuster_init() {
    if (class_exists('WooCommerce')) {
        new WC_Order_Completion_Date_Adjuster();
    }
}
add_action('plugins_loaded', 'wc_order_completion_date_adjuster_init');
