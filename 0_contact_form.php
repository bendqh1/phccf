<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$phone = $_POST['topic'];
	# $phone = $_POST['date'];
	$notes = $_POST['notes'];

	$recipient = "YOUR_EMAIL_ADDRESS_NAME@EXAMPLE.COM";
	$subject = "פנייה מטופס יצירת קשר";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
