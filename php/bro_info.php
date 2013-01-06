<?php

$info = $_POST['info'];

$key_name = $info['key_name'];
$name = $info['full_name'];
$pledge_class = $info['pledge_class'];
$grad_year = $info['grad_year'];
$major = $info['major'];
$hometown = $info['hometown'];
$hobbies = $info['hobbies'];
$dream_job = $info['dream_job'];
$quote = $info['quote'];

echo "<div id='bro_info' style='width: 600px;'>
<img src='../images/brothers/" . $key_name . ".jpg' height='300px' width='250px' style='float: left; margin-bottom: 10px;' class='bro_img' />
<ol style='float: right; text-align: left; width: 320px; list-style-type: none; list-style: none;' class='bro'>
	<li style='list-style-type: none;'><h2> " . $name . "</h2></li>
	<li><span style='font-weight: bold;'>Pledge Class:</span> " . $pledge_class . "</li>
	<li><span style='font-weight: bold;'>Grad Year:</span> " . $grad_year . "</li>
	<li><span style='font-weight: bold;'>Major:</span> " . $major . "</li>
	<li><span style='font-weight: bold;'>Hometown:</span> " .$hometown . "</li>
	<li><span style='font-weight: bold;'>Hobbies:</span> " . $hobbies . "</li>
	<li><span style='font-weight: bold;'>Dream Job:</span> " . $dream_job . "</li>
	<li><span style='font-weight: bold;'>Quote:</span> " . $quote . "</li>
</ol>
<div id='back' style='text-decoration: underline; color: blue; cursor: pointer;'><- Back</div>
</div>
<script type='application/javascript'>
$('#back').click(function() {
		$('#content').load('../pages/brothers.html');				  
						  });
</script>";


?>

