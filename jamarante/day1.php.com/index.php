<?php

include("models/view.php");

$view = new View();
$view->printHeader();

$data = array (
	"site_title" => "My website title",
	"logo_title" => "My website logo",
	"main_body_text" => "My website body",
	"copyright_info" => "My website copyright"
);	

$view->getView("header", $data);
$view->getView("body", $data);
$view->getView("footer", $data);
	
?>
