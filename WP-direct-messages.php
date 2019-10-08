<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/emilostervig/WP-direct-messages
 * @since             1.0.0
 * @package           WP_direct_messages
 *
 * @wordpress-plugin
 * Plugin Name:       WP Direct Messages
 * Plugin URI:        https://github.com/emilostervig/WP-direct-messages
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Emil Østervig
 * Author URI:        https://github.com/emilostervig/WP-direct-messages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_direct_messages
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
define( 'WP_DIRECT_MESSAGES_VERSION', '1.0.0' );

/*
* Require activation class
*/
require plugin_dir_path( __FILE__) . 'includes/class-wp_direct_messages_activator.php';

/**
 * The code that runs during plugin activation.
 */
function activate_wp_direct_messages() {
	$activator = new WP_direct_messages_activator();
	$activator->run();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp_direct_messages-deactivator.php
 */
function deactivate_wp_direct_messages() {

}

register_activation_hook( __FILE__, 'activate_wp_direct_messages' );
register_deactivation_hook( __FILE__, 'deactivate_wp_direct_messages' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp_direct_messages.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_direct_messages() {

	$plugin = new WP_direct_messages();
	$plugin->run();

}
run_wp_direct_messages();