<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$topic = $_POST["topic"];
	$date = $_POST["date"];
	$notes = $_POST["notes"];

	$to = "example@example.com"; ########## !!! NOTE !!! ##########
	$subject = "הודעת יצירת קשר מאת" . $name;
	$message = array (
		$name = "שם" . "\r\n",
		$name = "אימייל" . "\r\n",
		$phone = "טלפון" . "\r\n",
		$topic = "פנייה בנושא" . "\r\n",
		$date = "תאריך רצוי לפגישה (אם יש)" . "\r\n",
		$notes = "הערות (אם יש)" . "\r\n"
	);
	$headers = array(
		"From" => $email,
		"Reply-To" => $email
	);
	# The order should be as above: $to, $subject, $message and $headers
	
	mail($to, $subject, $message, $headers);
?>
