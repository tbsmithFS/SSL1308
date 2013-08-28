<?php
	/* include("settings/db.php"); */
	include("models/view.php");
	
	$view = new View();
	
	$view->printHeader();
	
	$data = array(
		'site_title' => "My PHP website title",
		'logo_title' => "my PHP logo",
		'main_body_text' => "Main body text for PHP site",
		'copyright_info' => "Full Sail University 2013",
	);
	
	$view->getView("header", $data);
	$view->getView("body", $data);
	$view->getView("footer", $data);
	
?>