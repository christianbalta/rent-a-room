<?php

/**
 * Database service for CRUD funtions
*/

class Rar_Entity_Service {

	/**
	 * access Room entity data
	 *
	 * @access   public
	 * @var      Rar_Room_Service
	*/
	public $roomService;
	
	/**
	 * access guest entity data
	 *
	 * @access   public
	 * @var      Rar_Guest_Service
	*/
	public $guestService;
	

	/**
	 * access rent entity data
	 *
	 * @access   public
	 * @var      Rar_Rent_Service
	*/
	public $rentService;
	
	/**
	 * access address entity data
	 *
	 * @access   public
	 * @var      Rar_Address_Service
	*/
	public $addressService;

	/**
	 * access status entity data
	 *
	 * @access   public
	 * @var      Rar_Status_Service
	*/
	public $statusService;

	/**
	 * wpdb for wordpress db access
	 * @access public
	 */
	public $wpdb;

	public function __construct() {
		global $wpdb;

		$this->wpdb = $wpdb;

		$this->statusService = new Rar_Status_Service($this->wpdb);
		$this->guestService = new Rar_Guest_Service($this->wpdb);
		$this->addressService = new Rar_Address_Service($this->wpdb);
		$this->roomService = new Rar_Room_Service($this->wpdb);
		$this->rentService = new Rar_Rent_Service($this->wpdb);

		// Include Upgrade Script
		require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	}

	public function init() {

		if(! $this->table_exists($this->statusService->table_name)) {
			$this->statusService->init();
		}

		if(! $this->table_exists($this->guestService->table_name)) {
			$this->guestService->init();
		}

		if(! $this->table_exists($this->addressService->table_name)) {
			$this->addressService->init();
		}

		if(! $this->table_exists($this->roomService->table_name)) {
			$this->roomService->init($this->addressService->table_name);
		}

		if(! $this->table_exists($this->rentService->table_name)) {
			$this->rentService->init($this->guestService->table_name, $this->roomService->table_name, $this->statusService->table_name);
		}
	}

	private function table_exists($name) : bool {
		$query = $this->wpdb->prepare( 'SHOW TABLES LIKE %s', $this->wpdb->esc_like( $name ) );

		if ($this->wpdb->get_var( $query ) == $name ) {
			return true;
		}
		else {
			return false;
		}
	}
}


class Rar_Guest_Service 
{
	public $table_name;
	
	private $wpdb;

	public function __construct($wpdb) {

		$this->wpdb = $wpdb;
		$this->table_name = $this->wpdb->prefix . 'rar_guest';
	}

	public function init()
	{
		$charset_collate = $this->wpdb->get_charset_collate();

		$create_status_table = "CREATE TABLE {$this->table_name} (
			id  INT NOT NULL AUTO_INCREMENT,
			email  VARCHAR(255) NOT NULL,
			last_name  VARCHAR(255) NOT NULL,
			first_name  VARCHAR(255) NOT NULL,
			phone  VARCHAR(255),
			PRIMARY KEY (id)
			) $charset_collate;";

		
		// Create Table
		dbDelta( $create_status_table );
	}

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

class Rar_Room_Service 
{
	public $table_name;

	private $wpdb;

	public function __construct($wpdb) {

		$this->wpdb = $wpdb;
		$this->table_name = $this->wpdb->prefix . 'rar_room';
	}

	public function init($address_table_name)
	{
		$charset_collate = $this->wpdb->get_charset_collate();
		
		$create_status_table = "CREATE TABLE {$this->table_name} (
			id  INT NOT NULL AUTO_INCREMENT,
			address_id  INT NOT NULL,
			space  VARCHAR(255) NOT NULL,
			description  VARCHAR(255),
			room_name VARCHAR(255) NOT NULL,
			PRIMARY KEY (id),
			FOREIGN KEY (address_id) REFERENCES {$address_table_name}(id)
			) $charset_collate;";

		dbDelta( $create_status_table );
	}

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

class Rar_Rent_Service 
{
	public $table_name;

	private $wpdb;

	public function __construct($wpdb) {

		$this->wpdb = $wpdb;
		$this->table_name = $this->wpdb->prefix . 'rar_rent';
	}

	public function init($guest_table_name, $room_table_name, $status_table_name)
	{
		$charset_collate = $this->wpdb->get_charset_collate();
		
		$create_status_table = "CREATE TABLE {$this->table_name} (
			id  INT NOT NULL AUTO_INCREMENT,
			wp_user_id  BIGINT(20) UNSIGNED NOT NULL,
			guest_id  INT NOT NULL,
			room_id  INT NOT NULL,
			status_id  INT NOT NULL,
			rent_from  DATETIME NOT NULL,
			rent_to  DATETIME NOT NULL,
			user_message  VARCHAR(255),
			PRIMARY KEY (id),
			FOREIGN KEY (wp_user_id) REFERENCES {$this->wpdb->prefix}users(id),
			FOREIGN KEY (guest_id) REFERENCES {$guest_table_name}(id),
			FOREIGN KEY (room_id) REFERENCES {$room_table_name}(id),
			FOREIGN KEY (status_id) REFERENCES {$status_table_name}(id)
			) $charset_collate;";

		dbDelta( $create_status_table );
	}
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


class Rar_Address_Service 
{
	public $table_name;

	private $wpdb;

	public function __construct($wpdb) {

		$this->wpdb = $wpdb;
		$this->table_name = $this->wpdb->prefix . 'rar_address';
	}

	public function init()
	{
		$charset_collate = $this->wpdb->get_charset_collate();
		
		$create_status_table = "CREATE TABLE {$this->table_name} (
			id  INT NOT NULL AUTO_INCREMENT,
			street  VARCHAR(255) NOT NULL,
			house_number  VARCHAR(255) NOT NULL,
			zip_code  VARCHAR(255) NOT NULL,
			city  VARCHAR(255) NOT NULL,
			country  VARCHAR(255) NOT NULL,
			PRIMARY KEY (id)
			) $charset_collate;";

		dbDelta( $create_status_table );
	}
	
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

class Rar_Status_Service 
{
	public const pending = 1;
	public const finished = 2;
	public const booked = 3;
	public const canceled = 4;

	public $table_name;
	// Initialize DB Tables
	// WP Globals

	private $wpdb;

	public function __construct($wpdb) {

		$this->wpdb = $wpdb;
		$this->table_name = $this->wpdb->prefix . 'rar_status';
	}

	public function init()
	{
		$charset_collate = $this->wpdb->get_charset_collate();
		// Create Room Table if not exist		
		// Query - Create Table
		$create_status_table = "CREATE TABLE {$this->table_name} (
			id  INT NOT NULL AUTO_INCREMENT,
			code  VARCHAR(55) NOT NULL,
			PRIMARY KEY (id)
			) $charset_collate;";

		// Include Upgrade Script
		require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
		// Create Table
		dbDelta( $create_status_table );


		$this->wpdb->insert($this->table_name, array(
			'code' => 'pending'
		));
		$this->wpdb->insert($this->table_name, array(
			'code' => 'finished'
		));
		$this->wpdb->insert($this->table_name, array(
			'code' => 'booked'
		));
		$this->wpdb->insert($this->table_name, array(
			'code' => 'canceled'
		));

	}

}