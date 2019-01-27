<?php

  class make_connection {
	
	protected $db_name = 'emaid';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_host = 'localhost';
	
	// Open a connect to the database.
	
	public function connect() {
	
		$connection = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if ( mysqli_connect_error() ) {
			printf("Connection failed: %s\
			",
 			mysqli_connect_error());
			exit();
		}
		return $connection;
		
	}
}

?>