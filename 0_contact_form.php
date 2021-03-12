<?php
	$to = "YOUR_EMAIL_ADDRESS_NAME@YOUR_EMAIL_ADDRESS_DELIMITER";
	$headers = $email = $_POST['email'] .  "\r\n";

	$subject = "פנייה מטופס יצירת קשר מאת" . $name = $_POST['name'];
	$message = $phone = $_POST['phone'] . "\r\n" . $topic = $_POST['topic'] . "\r\n" . $date = $_POST['date'] . "\r\n" . $notes = $_POST['notes'];
	
	mail($to, $headers, $subject, $message);
?>
