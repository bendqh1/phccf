<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$date = $_POST['date'];
	$notes = $_POST['notes'];

	$to = "YOUR_EMAIL_ADDRESS_NAME@YOUR_EMAIL_ADDRESS_DELIMITER"; ##### NOTE #####
	$headers = "From: $email \r\n";
	$subject = "פנייה מטופס יצירת קשר מאת" . $name;
	$message = $phone . echo htmlspecialchars("<br>") . $topic . echo htmlspecialchars("<br>") . $notes
	
	mail($to, $headers, $subject, $message) or die("Error!");
?>
