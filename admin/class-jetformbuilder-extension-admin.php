<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://drwebdesign.nl
 * @since      0.0.1
 *
 * @package    Jetformbuilder_Extension
 * @subpackage Jetformbuilder_Extension/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jetformbuilder_Extension
 * @subpackage Jetformbuilder_Extension/admin
 * @author     Daan de Groot <info@drwebdesign.nl>
 */
class Jetformbuilder_Extension_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.0.1
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jetformbuilder_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jetformbuilder_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/jetformbuilder-extension-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jetformbuilder_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jetformbuilder_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jetformbuilder-extension-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function post_meta_extension ( $handler ) {
		$form_id = 299;
		if ($handler->form_id === $form_id) {
			$id = $handler->response_data['inserted_post_id'];
			$form_field = 'property-address';
			$meta_key = 'property-address';
			if (array_key_exists($form_field, $handler->request_data)) {
				update_post_meta( $form_id, $meta_key, $handler->request_data[$form_field] );
			}
		}
	}

}
