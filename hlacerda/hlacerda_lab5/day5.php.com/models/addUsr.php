<?php
/* include "../controllers/connection.php"; */
/* class newUser extends DBConnector{ */

	
	
	
	
/*
	function readUser(){
		$stmnt = $this->db->prepare("insert into usrs(select username
from usrs");
			$stmnt->execute();
			$data = $stmnt->fetchAll();
			return $data;
	}
*/

class newUser {	
	function addUser($username='', $email='', $password=''){
		$db = new PDO("mysql:host=127.0.0.1; port=8889; dbname=fakeUsers","root", "root");

/* 		$stmnt = $this->db->prepare("insert into usrs(username, email, password) values (:username, :email, :password)"); */
		$stmnt = $db->prepare("insert into usrs(username, email, password) values (:username, :email, :password)");
		$stmnt->execute(array(':username'=>$username, ':email'=>$email, ':password'=>$password));
	}
}

?>