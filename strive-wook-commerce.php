<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            AliAsgar
 * @copyright         2022 Strive Digital
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Strive Wook Commerce
 * Plugin URI:        https://strivedigital.com/strive-wook-commerce
 * Description:       Plugin to manage popular woocommerce snippet from the backend based on checkbox selection.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            AliAsgar
 * Author URI:        https://strivedigitals.com
 * Text Domain:       woocommerce
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://strivedigital.com/strive-wook-commerce
 * Please read: 	  https://developer.wordpress.org/plugins/plugin-basics/best-practices/	
 */

define( 'STRIVE_WOOKC_PLUGIN', __FILE__ );

define( 'STRIVE_WOOKC_PLUGIN_BASENAME', plugin_basename( STRIVE_WOOKC_PLUGIN ) );

define( 'STRIVE_WOOKC_PLUGIN_NAME', trim( dirname( STRIVE_WOOKC_PLUGIN_BASENAME ), '/' ) );

define( 'STRIVE_WOOKC_PLUGIN_DIR', untrailingslashit( dirname( STRIVE_WOOKC_PLUGIN ) ) );

define( 'STRIVE_WOOKC_PLUGIN_ADMIN_DIR', STRIVE_WOOKC_PLUGIN_DIR . '/admin' );

define( 'STRIVE_WOOKC_PLUGIN_PUBLIC_DIR', STRIVE_WOOKC_PLUGIN_DIR . '/public' );

define( 'STRIVE_WOOKC_PLUGIN_INCLUDES_DIR', STRIVE_WOOKC_PLUGIN_DIR . '/includes' );

function strive_wookc_init(){
	include_once STRIVE_WOOKC_PLUGIN_ADMIN_DIR.'/admin.php';
	include_once STRIVE_WOOKC_PLUGIN_PUBLIC_DIR.'/public.php';
}
add_action('init', 'strive_wookc_init');