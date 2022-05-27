<?php

/**
 * Fired during plugin activation
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    rent-a-room
 * @subpackage rent-a-room/includes
 * @author     Amir Awak & Christian Balta <christianbalta@outlook.com>
 */
class Rar_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		
		require_once plugin_dir_path( __FILE__ ) . 'class-rar-entity-service.php';
		$entity_service = new Rar_Entity_Service();
		$entity_service->init();

	}
}
