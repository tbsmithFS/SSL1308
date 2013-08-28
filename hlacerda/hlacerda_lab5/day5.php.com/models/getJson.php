<?php
/* grab the posts from the db */


$query = "SELECT (username, email, password), guid FROM usrs";
$result = mysql_query($query,$link) or die('Errant query:  '.$query);


?>