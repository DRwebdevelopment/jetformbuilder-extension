<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://drwebdesign.nl
 * @since      0.0.1
 *
 * @package    Jetformbuilder_Extension
 * @subpackage Jetformbuilder_Extension/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    Jetformbuilder_Extension
 * @subpackage Jetformbuilder_Extension/includes
 * @author     Daan de Groot <info@drwebdesign.nl>
 */
class Jetformbuilder_Extension_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'jetformbuilder-extension',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
