<?php

	include 'include_html_fields_output_posting';
	include 'include_recipient';
	include 'include_subject';
	include 'include_message_output_format.php';
	include 'include_headers.php';
	include 'include_mail.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		header('Location: $contact_form_success_webpage');
		exit;
	}
?>
