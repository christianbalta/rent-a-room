<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              localhost
 * @since             1.0.0
 * @package           rent-a-room
 *
 * @wordpress-plugin
 * Plugin Name:       rent-a-room
 * Plugin URI:        localhost
 * Description:       Plugin where your customers can rent your office rooms
 * Version:           1.0.0
 * Author:            Amir Awak & Christian Balta
 * Author URI:        localhost
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rar
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
define( 'RAR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rar-activator.php
 */
function activate_rar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rar-activator.php';
	Rar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rar-deactivator.php
 */
function deactivate_rar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rar-deactivator.php';
	Rar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rar' );
register_deactivation_hook( __FILE__, 'deactivate_rar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rar() {

	$plugin = new Rar();
	$plugin->run();

}
run_rar();
