<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://drwebdesign.nl
 * @since             0.0.1
 * @package           Jetformbuilder_Extension
 *
 * @wordpress-plugin
 * Plugin Name:       JetFormBuilder Extension by DRwebdesign
 * Plugin URI:        https://drwebdesign.nl
 * Description:       A simple plugin that adds custom functionality to the JetFormBuilder plugin
 * Version:           0.0.1
 * Author:            Daan de Groot
 * Author URI:        https://drwebdesign.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jetformbuilder-extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.0.1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'JETFORMBUILDER_EXTENSION_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jetformbuilder-extension-activator.php
 */
function activate_jetformbuilder_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jetformbuilder-extension-activator.php';
	Jetformbuilder_Extension_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jetformbuilder-extension-deactivator.php
 */
function deactivate_jetformbuilder_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jetformbuilder-extension-deactivator.php';
	Jetformbuilder_Extension_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jetformbuilder_extension' );
register_deactivation_hook( __FILE__, 'deactivate_jetformbuilder_extension' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jetformbuilder-extension.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_jetformbuilder_extension() {

	$plugin = new Jetformbuilder_Extension();
	$plugin->run();

}
run_jetformbuilder_extension();
