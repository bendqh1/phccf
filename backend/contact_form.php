<?php
	$to = "example@example.com";
	$subject = "New email message";
	$message = $name = $_POST["name"] . "Name:" . "\r\n"
		. $email = $_POST["email"] . "Email:" . "\r\n"
		. $phone = $_POST["phone"] . "Phone:" . "\r\n"
		. $topic = $_POST["topic"] . "Topic:" . "\r\n"
		. $date = $_POST["date"] . "Date:" . "\r\n"
		. $time = $_POST["time"] . "Time:" . "\r\n"
		. $notes = $_POST["notes"] . "Notes:" . "\r\n"; # Note the semicolon before this comment;

	mail($to, $subject, $message);
	header(Content-Type: text/html; charset=utf-8);
?>
