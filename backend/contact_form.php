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
	$message = $name . "שם: " . "\r\n"
		. $email . "אימייל: " . "\r\n"
		. $phone . "טלפון: " . "\r\n"
		. $topic . "פנייה בנושא: " . "\r\n"
		. $date . "יום רצוי לפגישה מרחוק (אם יש): " . "\r\n"
		. $time . "שעה רצויה לפגישה מרחוק (אם יש):" . "\r\n"
		. $notes . "הערות (אם יש):" . "\r\n"; # Note the semicolon before this comment;

	mail($to, $subject, $message);
	header('Content-Type: text/html; charset=utf-8');
?>
