<?php 

class Connessione{
	public $conn;
	public function __construct()
	{
		$this->conn = new mysqli("localhost", "root", "","mondiali2018");

		 if ($this->conn->connect_error) {
		    die('Connect Error: ' . $this->conn->connect_error);
		}

	}
		public function getConnessione(){
			return $this->conn;
		}




}




 ?>