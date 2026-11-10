<?php


function init_table_primus(){
    global $wpdb;


    $table_logs = $wpdb->prefix . "primus_logs";
    if (is_null($wpdb->get_var("SHOW TABLES LIKE '$table_logs'"))){

        add_table_logs();
    }

    $table_users = $wpdb->prefix . "primus_by_user";
    if (is_null($wpdb->get_var("SHOW TABLES LIKE '$table_users'"))){

        add_table_prim_by_user();
    }

    $table_invoices = $wpdb->prefix . "primus_invoices";
    if (is_null($wpdb->get_var("SHOW TABLES LIKE '$table_invoices'"))){

        add_table_invoice();
    }
}
init_table_primus();



function add_table_prim_by_user() {
    global $wpdb;
    global $jal_db_version;


    $table_name = $wpdb->prefix . 'primus_by_user';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
        `primus_cl` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  
        `creat_ad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        dbDelta( $sql );
        add_option( 'jal_db_version', $jal_db_version );



}
function add_table_logs() {
    global $wpdb;
    global $jal_db_version;


    $table_name = $wpdb->prefix . 'primus_logs';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `status` varchar(255) COLLATE utf8mb4_unicode_520_ci ,
        `message` varchar(255) COLLATE utf8mb4_unicode_520_ci ,  
        `creat_ad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    dbDelta( $sql );
    add_option( 'jal_db_version', $jal_db_version );



}
function add_table_invoice() {
    global $wpdb;
    global $jal_db_version;


    $table_name = $wpdb->prefix . 'primus_invoices';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `order_id` varchar(255) COLLATE utf8mb4_unicode_520_ci ,
         `status` varchar(255) COLLATE utf8mb4_unicode_520_ci ,  
        `message` varchar(255) COLLATE utf8mb4_unicode_520_ci ,  
        `creat_ad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    dbDelta( $sql );
    add_option( 'jal_db_version', $jal_db_version );



}