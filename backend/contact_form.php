<?php

	include 'include_html_fields_output_posting';
	include 'include_recipient';

	$subject = 'הודעה חדשה מאת: ' . $name;

	include 'include_message_output_format.php';
	include 'include_headers.php';
	mail($to, $subject, $message, implode("\r\n", $headers));

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		header('Location: $contact_form_success_webpage');
		exit;
	}
?>
