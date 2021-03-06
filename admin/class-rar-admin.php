<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/admin
 * @author     Amir Awak & Christian Balta <christianbalta@outlook.com>
 */
class Rar_Admin {

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
		wp_register_style('prefix_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
		wp_enqueue_style('prefix_bootstrap');

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rar-admin.css', array(), $this->version, 'all' );

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
		 * defined in Rar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_register_script('prefix_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
		wp_enqueue_script('prefix_bootstrap');
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rar-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function rar_dashboard_page() {
		add_menu_page(
			'RAR Dashboard',
			'Rent a Room',
			'manage_options',
			'rar',
			array( $this, 'display_dashboard_page' ),
			plugin_dir_url(__FILE__) . 'images/rar_icon.png',
			20
		);

	}

	public function rar_create_room_page(){
		add_submenu_page(
			'rar',
			'rar-create-room',
			'Create Room',
			'manage_options',
			'rar-create-room',
			array( $this, 'display_create_room_page' )
		);
	}
	/**
	 * Render the dashboard page for plugin
	 *
	 * @since  1.0.0
	 */
	public function display_dashboard_page() {
		include_once 'partials/rar-admin-display.php';
	}

	/**
	 * Render the create room submenu
	 *
	 * @since  1.0.0
	 */
	public function display_create_room_page() {
		include_once 'partials/rar-admin-create-room.php';
	}
}
