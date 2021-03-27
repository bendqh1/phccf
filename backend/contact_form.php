<?php
	$to = "example@example.com";
	$subject = "New email message";
	$message = $name = $_POST["name"] . "שם: " . "\r\n"
		. $email = $_POST["email"] . "אימייל: " . "\r\n"
		. $phone = $_POST["phone"] . "טלפון: " . "\r\n"
		. $topic = $_POST["topic"] . "פנייה בנושא: " . "\r\n"
		. $date = $_POST["date"] . "יום רצוי לפגישה מרחוק (אם יש): " . "\r\n"
		. $time = $_POST["time"] . "שעה רצויה לפגישה מרחוק (אם יש):" . "\r\n"
		. $notes = $_POST["notes"] . "הערות (אם יש):" . "\r\n"; # Note the semicolon before this comment;

	mail($to, $subject, $message);
	header('Content-Type: text/html; charset=utf-8');
?>
