<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    K8lang_Chng
 * @subpackage K8lang_Chng/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    K8lang_Chng
 * @subpackage K8lang_Chng/admin
 * @author     Your Name <email@example.com>
 */
class K8lang_Chng_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $k8lang_chng    The ID of this plugin.
	 */
	private $k8lang_chng;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $k8lang_chng       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $k8lang_chng, $version ) {

		$this->k8lang_chng = $k8lang_chng;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in K8lang_Chng_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The K8lang_Chng_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_style( $this->k8lang_chng, plugin_dir_url( __FILE__ ) . 'css/k8lang-chng-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in K8lang_Chng_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The K8lang_Chng_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( $this->k8lang_chng, plugin_dir_url( __FILE__ ) . 'js/k8lang-chng-admin.js', array( 'jquery' ), $this->version, false );

	}

}
