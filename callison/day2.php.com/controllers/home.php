<?php
include("models/view.php");

$view = new View();

$view->printHeader();

$data = array(
	'site_title' => "My PHP website title - home",
	'logo_title' => "My PHP logo",
	'main_body_text' => "Welcome to the home page",
	'copyright_info' => "Callisonification &copy; 2013",
);

$view->getView("views/header", $data);
$view->getView("views/nav", $data);
$view->getView("views/body", $data);
$view->getView("views/footer", $data);
