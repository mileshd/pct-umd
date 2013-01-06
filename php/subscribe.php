<?php

	include('db.php');

	$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
	if (!$con) {
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(DB_NAME) or die(mysql_error());

	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$query = sprintf("INSERT INTO `subscribers` (name, email) VALUES ('%s', '%s')",
	                  mysql_real_escape_string($name),
	                  mysql_real_escape_string($email));
	
	if (mysql_query($query)) {
		echo "Thank you for your Interest!";
	} else {
		echo "Your information could not be submitted at this time. Please try again later.";
	}
	

?>