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
			<b>שם: </b> <?php. $name .?> <br>
			<b>אימייל: </b> <?php. $email .?> <br>
			<b>טלפון: </b> <?php. $phone .?> <br>
			<b>פנייה בנושא: </b> <?php. $topic .?> <br>
			<b>יום רצוי לפגישה מרחוק (אם יש): </b> <?php. $date .?> <br>
			<b>שעה רצויה לפגישה מרחוק (אם יש): </b> <?php. $time .?> <br>
			<b>הערות (אם יש): </b> <?php. $notes .?> <br>
		</body>
	</html>
	';

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';

	mail($to, $subject, $message, implode("\r\n", $headers));
?>
