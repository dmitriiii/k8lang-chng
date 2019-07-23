<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           K8lang_Chng
 *
 * @wordpress-plugin
 * Plugin Name:       English Language for Dashboard
 * Description:       This plugin allows have frontend and backend part of website in different languages( backend part will be in English )
 * Version:           1.0.0
 * Author:            Dmitrii Krapivko
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       k8lang-chng
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'K8LANG_CHNG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-k8lang-chng-activator.php
 */
function activate_k8lang_chng() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-k8lang-chng-activator.php';
	K8lang_Chng_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-k8lang-chng-deactivator.php
 */
function deactivate_k8lang_chng() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-k8lang-chng-deactivator.php';
	K8lang_Chng_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_k8lang_chng' );
register_deactivation_hook( __FILE__, 'deactivate_k8lang_chng' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-k8lang-chng.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_k8lang_chng() {

	$plugin = new K8lang_Chng();
	$plugin->run();

}
run_k8lang_chng();
