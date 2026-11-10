<?php

// Add a custom setting tab to Woocommerce > Settings section
add_action( 'woocommerce_settings_tabs', 'wc_settings_tabs_primus_tab' );

function wc_settings_tabs_primus_tab() {

    $current_tab = ( isset($_GET['tab']) && $_GET['tab'] === 'primus' ) ? 'nav-tab-active' : '';
    echo '<a href="admin.php?page=wc-settings&tab=primus" class="nav-tab '.$current_tab.'">'.__( "Primus", "woocommerce" ).'</a>';
}


add_action( 'woocommerce_settings_primus', 'display_primus_content' );
function display_primus_content() {
    include DIR_PATH.'Primus/admin/tpl/admin_tab_menu_tpl.php';
}



add_action( 'admin_enqueue_scripts', 'admin_style');
function admin_style() {

    wp_enqueue_style ('admin-styles', DIR_URL.'asset/css/style.css');
}


require(DIR_PATH.'Primus/admin/script/admin_setting.php');
require(DIR_PATH.'Primus/admin/script/admin_purge_log.php');
require(DIR_PATH.'Primus/admin/script/admin_invoices_action.php');
require(DIR_PATH.'Primus/admin/script/admin_stock_cron.php');

