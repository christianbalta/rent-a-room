<?php

/**
 * Database service for CRUD funtions
*/

class RarEntityService {


	/**
	 * access Room entity data
	 *
	 * @access   public
	 * @var      RarRoomService
	*/
	public $roomService;
	
	/**
	 * access guest entity data
	 *
	 * @access   public
	 * @var      RarGuestService
	*/
	public $guestService;
	

	/**
	 * access rent entity data
	 *
	 * @access   public
	 * @var      RarRentService
	*/
	public $rentService;
	
	/**
	 * access address entity data
	 *
	 * @access   public
	 * @var      RarAddressService
	*/
	public $addressService;

	/**
	 * access status entity data
	 *
	 * @access   public
	 * @var      RarStatusService
	*/
	public $statusService;

	public function __construct() {

		if (!$this->entities_exist()) {
			$this->run_entity_setup();
		}

		$this->roomService = new RarRoomService();
		$this->guestService = new RarGuestService();
		$this->rentService = new RarRentService();
		$this->addressService = new RarAddressService();
		$this->statusService = new RarStatusService();
	}

	private function entities_exist() : bool {
		//TODO check Entities
		//if exists continue
		//if not, create

		return false;
	}

	private function run_entity_setup()
	{
		//TODO run sql script
		$this->statusService->init();
	}

}


class RarGuestService 
{

	public function create($name, $email, $mobile)
	{
		//add create date with date stamp now
	}

	public function edit($id, $name, $email, $mobile)
	{

	}

	public function delete_by_id($id)
	{

	}

	public function get_by_id($id)
	{

	}

	public function get_all()
	{

	}

}

class RarRoomService 
{

	public function create($address_id, $space, $roomNumber, $price_per_day, $price_per_hour, $description)
	{

	}

	public function edit($id, $address_id, $space, $roomNumber, $price_per_day, $price_per_hour, $description)
	{

	}

	public function delete_by_id($id)
	{

	}

	public function get_by_id($id)
	{

	}

	public function get_all()
	{

	}

}

class RarRentService 
{

	public function create($user_id, $guest_id, $room_id, $rent_from, $rent_to, $message, $status_id)
	{

	}

	public function edit($id, $user_id, $guest_id, $room_id, $rent_from, $rent_to, $message, $status_id)
	{

	}

	public function delete_by_id($id)
	{

	}

	public function get_by_id($id)
	{

	}

	public function get_all()
	{

	}

}


class RarAddressService 
{

	public function create($street, $houseNumber, $zipCode, $city, $country)
	{

	}

	public function edit($id, $street, $houseNumber, $zipCode, $city, $country)
	{

	}

	public function delete_by_id($id)
	{

	}

	public function get_by_id($id)
	{

	}

	public function get_all()
	{

	}

}

class RarStatusService 
{
	public const pending = 1;
	public const finished = 2;
	public const booked = 3;
	public const canceled = 4;

	// Initialize DB Tables
	// WP Globals


	public function init()
	{
		global $table_prefix, $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		// Rooms Table
		$status = $table_prefix . 'status';

		// Create Room Table if not exist
		if($wpdb->get_var( "show tables like '$status'" ) != $status) {

			// Query - Create Table
			$create_status_table = "CREATE TABLE $status (
				id  mediumint(9) NOT NULL AUTO_INCREMENT,
				code  varchar(55) NOT NULL,
				PRIMARY KEY  (id)
				) $charset_collate;";

			// Include Upgrade Script
			require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
			// Create Table
			dbDelta( $create_status_table );


			$wpdb->insert($status, array(
				'code' => 'pending'
			));
			$wpdb->insert($status, array(
				'code' => 'finished'
			));
			$wpdb->insert($status, array(
				'code' => 'booked'
			));
			$wpdb->insert($status, array(
				'code' => 'canceled'
			));
		}



	}




}