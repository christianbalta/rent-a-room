<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/public
 * @author     Amir Awak & Christian Balta <christianbalta@outlook.com>
 */
class Rar_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// CSS
		wp_register_style('prefix_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
		wp_enqueue_style('prefix_bootstrap');
		wp_register_style('prefix_tempusdominus', 'https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css');
		wp_enqueue_style('prefix_tempusdominus');
		
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rar-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		// JS
		wp_register_script('prefix_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
		wp_enqueue_script('prefix_bootstrap');
		wp_register_script('prefix_popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js');
		wp_enqueue_script('prefix_popperjs');
		wp_register_script('prefix_tempusdominus', 'https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js');
		wp_enqueue_script('prefix_tempusdominus');
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rar-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_shortcodes() {
		add_shortcode( 'shortcode', array( $this, 'shortcode_function') );
	  }

	/**
	 * Render the frontend page for plugin
	 *
	 * @since  1.0.0
	 */
	public function shortcode_function() {
		ob_start();
    	require_once 'partials/rar-public-display.php';
    	$content = ob_get_clean();
    	return $content;
	}

}
