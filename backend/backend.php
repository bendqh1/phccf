<?php
	$topic = $_POST['topic']; # Required;
	$name = $_POST['name'];   # Required;
	$email = $_POST['email']; # Required;

	$url = $_POST['text']; # Text instead url to prevent obligating a user to add a protocol prefix such as http://|https:// ;
	$phone = $_POST['phone'];

	$date = $_POST['date'];
	$time = $_POST['time'];
	$notes = $_POST['notes'];

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
