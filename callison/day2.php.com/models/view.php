<?php

class View{
	
	//creates and prints header info
	function printHeader(){
		header('Content-type: text/html');
	}
	
	//retrieves view src based on file name requested
	function getView($pagename='', $data=''){
		
		require_once($pagename.'.php');
	}
	
}
