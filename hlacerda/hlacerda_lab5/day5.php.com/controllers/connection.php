<?php

	class DBConnector{
		
		public $db;
		
		function __construct(){
			$host = '127.0.0.1';
			$user = 'root';
			$pass = 'root';
			$port = '8889';
			$dbname = 'fakeUsers';
			$this->db = new PDO("mysql:host=$host;
								 port=$port;
								 dbname=$dbname",
								 $user, $pass);
		
		}
		
	}

?>