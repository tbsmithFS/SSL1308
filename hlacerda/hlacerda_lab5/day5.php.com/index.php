<?php
 	include "controllers/home.php";
	
	/* include("settings/db.php"); */


/*
	if (empty ($_GET["controllers"])) {
	$con = 'home';
	}else{
		$con = $_GET["controllers"];
	}
	
	if ($con == "home") {
	$homeInstance = new Home();
	$homeInstance->get($_GET);
	}else{
		echo "the controller was not 'home'";
	}
*/

/*
	$db = new PDO("mysql:host=127.0.0.1; port=8889; dbname=fakeUsers","root", "root");
			$stmnt = $db->prepare("Select username from usrs");
			$stmnt->execute();
			$data = $stmnt->fetchAll();
			/* return $data; */
			/*
$jData = json_encode($data);
			var_dump($jData);
*/

	
	$action = $_GET["action"];
	
	if (empty($_GET["controller"])){
		$con = "home";
	} else {
		$con = $_GET["controller"];	
	}
	
	if ($con == 'home') {
		$controller = new Home();
		$controller->get($_GET);
	} else if ($con == 'register'){
		include "controllers/register.php";
		$controller = new Register();
		$controller->get($_GET);
	}else if($con == 'user') {
		include "controllers/user.php";
		$controller = new User();
		$controller->get($_GET);
	}
	
	
	if($action == 'user'){
		// check the action
		// select data from the data base
		include "models/getUsr.php";
		$controller = new selectUsers();
		$controller->readUser();
		echo("");
		var_dump($controller);
	}

	
	/*
$user = new User();
		$user->dispatch($_GET);
*/

	
	
?>