<?php
include "models/addUsr.php";
include 'models/view.php';


 class Home {
 	function get($pairs, $data = '') {
 		$view_model = new View();
		$posts = new newUser();
		
		session_start();
		
		if(isset($_SESSION["loggedin"])){
			var_dump($_SESSION);
			echo("post's sessions start is working");
		}else{
			header("http://localhost:8888/SSL/day5.php.com/index.php");
		}
		
		include("views/header.php");
		
		$view_model->getView("header");
		
		if(empty($pairs['action'])){
			$action = 'home';
		}else{
			$action = $pairs['action'];
		}
		
		$data = array(
    		'username' => "Hugo",
    		'controller' => "home");
    		
    	$view_model->getView("header", $data);
	    $view_model->getView('sidebar', $data);
	    if ($action == 'home'){
	    include "views/home.php";								
	    $view_model->getView("home", $data);
		} else if ($action == 'aboutUs'){
    		$view_model->getView('about', $data);
		} else {
    		$view_model->getView('home', $data);
		}
		$view_model->getView('footer', $data);
		
	}
 }
?>