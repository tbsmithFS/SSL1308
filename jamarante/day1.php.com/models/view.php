<?php

class View {

	function printHeader() {
		header("Content-type: text/html\n\n");
	}

	function getView($file, $data) {
		$fullPath = "/var/www/day1.php.com/views/$file.php";	

		if (file_exists($fullPath)) {
			include($fullPath);
		}
	}
}

?>
