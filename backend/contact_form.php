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

	$message = "<html><body>";
	$message .= "<br>שם: </b>" . $name . "\r\n"
		. "<br>אימייל: </b>" . $email . "\r\n"
		. "<br>טלפון: </b>" . $phone . "\r\n"
		. "<br>פנייה בנושא: </b>" . $topic . "\r\n"
		. "<br>יום רצוי לפגישה מרחוק (אם יש): </b>" . $date . "\r\n"
		. "<br>שעה רצויה לפגישה מרחוק (אם יש): </b>" . $time . "\r\n"
		. "<br>הערות (אם יש): </b>" . $notes . "\r\n";
	$message .= "</body></html>";

	mail($to, $subject, $message);
	header('Content-Type: text/html; charset=utf-8');
?>
