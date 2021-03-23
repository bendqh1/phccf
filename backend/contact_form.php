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
		# "From" => $email, # If your website hoster isn't your email hoster this shouldn't be setted
		# "Reply-To" => $email, # Same as above
		# "X-Mailer: PHP/" . phpversion() # Same as above
	);
	
	mail($to, $subject, $message, $headers);
?>
