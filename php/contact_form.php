<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$topic = $_POST["topic"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$notes = $_POST["notes"];

	$to = "example@example.com";
	$subject = "הודעת יצירת קשר";
	$message = array (
		$name . "שם" . "\r\n",
		$email . "אימייל" . "\r\n",
		$phone . "טלפון" . "\r\n",
		$topic . "פנייה בנושא" . "\r\n",
		$date . "יום רצוי לפגישה (אם יש)" . "\r\n",
		$time . "שעה רצויה לפגישה (אם יש)" . "\r\n",
		$notes . "הערות (אם יש)" . "\r\n"
	);
	$headers = array(
		"From" => $email,
		"Reply-To" => $email,
		"X-Mailer: PHP/" . phpversion()
	);
	# The order should be as above: $to, $subject, $message and $headers
	
	mail($to, $subject, $message, $headers);
?>
