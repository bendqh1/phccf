<?php
	$contact_form_url="example.com/contact";
	$contact_form_success_url="example.com/contact_succees";

	$to = "example@example.com";
	$subject = "New email message";
	$message = $name = $_POST["name"] . "Name:" . "\r\n"
		. $email = $_POST["email"] . "Email:" . "\r\n"
		. $phone = $_POST["phone"] . "Phone:" . "\r\n"
		. $topic = $_POST["topic"] . "Topic:" . "\r\n"
		. $date = $_POST["date"] . "Date:" . "\r\n"
		. $time = $_POST["time"] . "Time:" . "\r\n"
		. $notes = $_POST["notes"] . "Notes:" . "\r\n"
	);

	mail($to, $subject, $message);

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		header("Location: $contact_form_success_url");
		exit;
	}
?>
