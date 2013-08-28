<?php

include "../models/addUsr.php";

/* include 'connection.php'; */

/*
function generateSalt($max = 15) {
	$characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
	$i = 0;
	$salt = "";
	while ($i < $max) {
	    $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
	    $i++;
	}
	return $salt;
	var_dump($salt);
}
*/



$masterValidate = true;

$user = $_POST["username"];
$email = $_POST["email"];

$pass = $_POST["password"];

/*
$sex = $_POST["sex"];
$vehicle = $_POST["vehicle"];
*/

if(!preg_match("^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$^" ,$email)){
	$masterValidate = false;
}else{
	$masterValidate = true;
}

if($masterValidate == true){

	/*
$saltyPass = generateSalt($pass);
	echo($saltyPass);
*/
	
	$sendData = new newUser();
	$sendData->addUser($user, $email, $pass);
		
}else{
	echo "validation incorrect";
}
	
?>