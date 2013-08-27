<?php

/*
	this is our main interface for the user
	for handling the displaying of static pages
*/


require_once 'models/view.php';

class Home {
	function get($pairs, $data = ''){
		if(empty($pairs['action'])){
			$action = 'home';
		}else{
			$action = $pairs['action'];
		}
		
		$view_model = new View();
		$view_model->getView("header");
	
	
	$data = array(
    		'username' => "Hugo",
    		'controller' => "home");
    		
    $view_model->getView("header", $data);
    $view_model->getView('sidebar', $data);
    if ($action == 'home'){
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