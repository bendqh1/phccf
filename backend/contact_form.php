<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$topic = $_POST["topic"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$notes = $_POST["notes"];

	$to = "example@example.com";
	$subject =  $name . "הודעת אימייל חדשה מאת: ";
	$message = "שם: " . $name . "\r\n"
		. "אימייל: . $email . " . "\r\n"
		. "טלפון: " . $phone . "\r\n"
		. "פנייה בנושא: " . $topic . "\r\n"
		. "יום רצוי לפגישה מרחוק (אם יש): " . $date . "\r\n"
		. "שעה רצויה לפגישה מרחוק (אם יש):" . $time . "\r\n"
		. "הערות (אם יש):" . $notes . "\r\n"; # semicolon before this comment;

	mail($to, $subject, $message);
	header('Content-Type: text/html; charset=utf-8');
?>
