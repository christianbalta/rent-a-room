<?php

/**
 * Fired during plugin activation
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    Myr
 * @subpackage Myr/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Myr
 * @subpackage Myr/includes
 * @author     Amir Awak & Christian Balta <christianbalta@outlook.com>
 */
class Myr_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// Initialize DB Tables
		// WP Globals
		global $table_prefix, $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		// Rooms Table
		$roomTable = $table_prefix . 'rooms';

		// Create Room Table if not exist
		if($wpdb->get_var( "show tables like '$roomTable'" ) != $roomTable) {

			// Query - Create Table
			$sql = "CREATE TABLE $roomTable (
				id mediumint(9) NOT NULL AUTO_INCREMENT,
				reserved boolean NOT NULL,
				room_nr int NOT NULL,
				capacity int NOT NULL,
				price_per_hour varchar(55) NOT NULL,
				price_per_day varchar(55) NOT NULL,
				location varchar(500) NOT NULL,
				PRIMARY KEY  (id)
				) $charset_collate;";

			// Include Upgrade Script
			require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
			
			// Create Table
			dbDelta( $sql );
		}
	}
}
