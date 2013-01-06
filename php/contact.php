<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$category = $_POST['category'];
	$msg = $_POST['message'];
	
	$to = "miles.dickinson@yahoo.com";
	
	$message = "Dear Miles, " . "\n\n" . $msg . "\n\nSincerely,\n\n" . $name;
	
	/*$headers .= 'To: Miles ' . $to . "\r\n";
	$headers .= 'From: ' . $email . "\r\n";*/

	if(@mail($to, $subject, $message)) {
		echo 'Thank you for your email. We will be in contact soon.';
	}
	else{
		echo 'Sorry, there was an error in sending your message. Please try again later.';
	}
?>