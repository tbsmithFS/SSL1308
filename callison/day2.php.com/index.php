<?php 
	
	//if controller is empty then direct to home page controller
	//else retrieve the correct controller form $con
	if(empty($_GET['con'])){
		$con = 'home';	
	}else{
		$con = $_GET['con'];	
	}
	
	//handles redirects for different controller calls
	if($con == 'home'){
		include('controllers/home.php');
		$ctlr = new Home();
		$ctlr->get($_GET);	
	}else if($con == 'blog'){
		include('controllers/blog.php');
		$ctlr = new Blog();
		$ctlr->get($_GET);	
	}else if($con == 'login'){
		include('controllers/login.php');
		$ctlr = new Login();
		$ctlr->get($_GET);	
	}
?>