<?php
	$topic = $_POST['topic'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$url = $_POST['url'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$phone = $_POST['phone'];
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
