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
	
	$message = "
	$message .= "<html>"
	$message .= "<body dir="rtl" style="text-align: right;">"
	$message .= "<b>שם: </b>" . $name . "\r\n"
	$message .= "<b>אימייל: </b>" . $email . "\r\n"
	$message .= "<b>טלפון: </b>" . $phone . "\r\n"
	$message .= "<b>פנייה בנושא: </b>" . $topic . "\r\n"
	$message .= "<b>יום רצוי לפגישה מרחוק (אם יש): </b>" . $date . "\r\n"
	$message .= "<b>שעה רצויה לפגישה מרחוק (אם יש): </b>" . $time . "\r\n"
	$message .= "<b>הערות (אם יש): </b>" . $notes . "\r\n";
	$message .= "</body>"
	$message .= "</html>"
	";

	mail($to, $subject, $message);
	header("MIME-Version: 1.0");
	header("Content-Type: text/html; charset=utf-8");
?>
