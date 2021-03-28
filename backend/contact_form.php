<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$topic = $_POST["topic"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$notes = $_POST["notes"];

	$to = "example@example.com";
	$subject = "הודעת אימייל חדשה מאת: " . $name;
	$message = "<b>שם: </b>" . $name . "\r\n"
		. "<b>אימייל: </b>" . $email . "\r\n"
		. "<b>טלפון: </b>" . $phone . "\r\n"
		. "<b>פנייה בנושא: </b>" . $topic . "\r\n"
		. "<b>יום רצוי לפגישה מרחוק (אם יש): </b>" . $date . "\r\n"
		. "<b>שעה רצויה לפגישה מרחוק (אם יש): </b>" . $time . "\r\n"
		. "<b>הערות (אם יש): </b>" . $notes . "\r\n";

	mail($to, $subject, $message);
	header('Content-Type: text/html; charset=utf-8');
?>
