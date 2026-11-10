<?php

/**
 * Plugin Name: Primus Wins
 * 
 * Plugin URI: https://danenou.net
 *
 * Requires PHP: 7.4
 * 
 * Description: Manager services Primus Wins (gestion clients, ventes, produits, stocks) via  Webservices SOAP.
 * 
 * Author: Marc Piatkowski
 * 
 * Author Name: Marc Piatkowski
 * 
 * Author URI: https://web-du-leon.bzh
 * 
 * Version: V1.0
 */


// Charge WordPress Core
//require_once('../../../../wp-load.php');


define('DIR_PATH',plugin_dir_path( __DIR__ ));
define('DIR_URL',plugin_dir_url( __FILE__ ) );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require(DIR_PATH.'Primus/core/Main.php');

include DIR_PATH.'Primus/class/PrimusClient.php';
include DIR_PATH.'Primus/class/PrimusOrder.php';
/*include DIR_PATH.'Primus/class/list_clients.php';*/


