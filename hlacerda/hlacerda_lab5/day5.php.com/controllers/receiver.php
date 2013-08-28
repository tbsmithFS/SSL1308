<?php


$usr = $_POST["username"];
$pass = $_POST["password"];

$hashUsr = md5($usr);
$hashPass = md5($pass);

if($hashUsr == $hashPass){
	echo("Match");
}else{
	echo("Try Again");
}



?>