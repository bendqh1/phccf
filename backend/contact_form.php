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
	include "message_variable.php";

	mail($to, $subject, $message);
	header("'MIME-Version: 1.0");
	header("Content-Type: text/html; charset=utf-8");
?>
