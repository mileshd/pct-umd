<?php

include('db.php');

$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(DB_NAME) or die(mysql_error());

$key_name = $_POST['key_name'];

$query = mysql_query("SELECT * FROM info WHERE key_name='$key_name'"); //select the prize details from database
 $rows = array();
 
while ($row = mysql_fetch_assoc($query)) { //store prize details into seperate variables
		$rows[] = $row;
		/*$full_name = $row['full_name'];
		$pledge_class = $row['pledge_class'];
		$grad_year = $row['grad_year'];
		$major = $row['major'];
		$hometown = $row['hometown'];
		$hobbies = $row['hobbies'];
		$dream_job = $row['dream_job'];
		$quote = $row['quote'];*/
}

echo json_encode($rows);

?>