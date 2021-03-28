<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$url = $_POST['url'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$notes = $_POST['notes'];

	$to = 'example@example.com';

	$subject = 'הודעת אימייל חדשה מאת: ' . $name;
	
	$message = <<<LABEL
	<html>
		<head>
			<style>
			* {
				font-size: 18px;
			}
			.form_output_col_1 {
				display: inline;
				font-weight: bold;
			}
			.form_output_col_1:after {
				content:": "
			}
			</style>
		</head>
		<body dir="rtl" style="text-align: right;">
			<p class="form_output_col_1">שם</p><p class="form_output_col_2">$name</p>
			<p class="form_output_col_1">אימייל</p><p dir="ltr" class="form_output_col_2">$email</p>
			<p class="form_output_col_1">טלפון</p><p dir="ltr" class="form_output_col_2">$phone</p>
			<p class="form_output_col_1">פנייה בנושא<p class="form_output_col_2">$topic</p>
			<p class="form_output_col_1">דומיין אתר (אם יש)</p><p dir="ltr" class="form_output_col_2">$url</p>
			<p class="form_output_col_1">יום רצוי לפגישה מרחוק (אם יש)</p><p dir="ltr" class="form_output_col_2">$date</p>
			<p class="form_output_col_1">שעה רצויה לפגישה מרחוק (אם יש)</p><p class="form_output_col_2">$time</p>
			<p class="form_output_col_1">הערות (אם יש)</p><p class="form_output_col_2">$notes</p>
		</body>
	</html>
	LABEL;

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';

	mail($to, $subject, $message, implode("\r\n", $headers));
?>
