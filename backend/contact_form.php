<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$notes = $_POST['notes'];

	$to = 'example@example.com';

	$subject = 'הודעת אימייל חדשה מאת: ' . $name;
	
	$message = '
	<html>
	<body dir="rtl" style="text-align: right;">
	<b>שם: </b> . $name . <br>
	<b>אימייל: </b> . $email . <br>
	<b>טלפון: </b> . $phone . <br>
	<b>פנייה בנושא: </b> . $topic . <br>
	<b>יום רצוי לפגישה מרחוק (אם יש): </b> . $date . <br>
	<b>שעה רצויה לפגישה מרחוק (אם יש): </b> . $time . <br>
	<b>הערות (אם יש): </b> . $notes . <br>
	</body>
	</html>
	';

	mail($to, $subject, $message);
	header('MIME-Version: 1.0');
	header('Content-Type: text/html; charset=utf-8');
?>
