<?php
	$topic = $_POST['topic']; # Required;
	$name = $_POST['name'];   # Required;
	$email = $_POST['email']; # Required;
	$url = $_POST['url']; 
	# Name attribute is "url" but input type is "text" because "url" obligates http:// or https:// which users normally don't input;

	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$notes = $_POST['notes']; # Normally turned off to prevent spam;

	$to = 'example@example.com';
	$subject = 'הודעה חדשה מאת: ' . $name;
	include 'message.php';
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';
	mail($to, $subject, $message, implode("\r\n", $headers));

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		header('Location: $contact_form_success_webpage');
		exit;
	}
?>
