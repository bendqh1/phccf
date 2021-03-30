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
				font-size: 20px;
			}
			.form_output_col_1 {
				font-weight: bold;
			}
			.form_output_col_1:not(#form_output_topic):after {
				content:": "
			}
			</style>
		</head>
		<body dir="rtl" style="text-align: right;">
			<div><span class="form_output_col_1">שם</span><span class="form_output_col_2">$name</span></div>
			<div><span class="form_output_col_1">אימייל</span><span dir="ltr" class="form_output_col_2">$email</span></div>
			<div><span class="form_output_col_1">טלפון</span><span dir="ltr" class="form_output_col_2">$phone</span></div>
			<div><span id="form_output_topic" class="form_output_col_1">נושא הפנייה: <span class="form_output_col_2">$topic</span></div>
			<!-- For some reason, the automatic colon addition isn't applicable for the above date field so I just added a colon and a space directly; -->
			<div><span class="form_output_col_1">דומיין אתר (אם יש)</span><span dir="ltr" class="form_output_col_2">$url</span></div>
			<div><span class="form_output_col_1">יום רצוי לפגישה מרחוק (אם יש)</span><span class="form_output_col_2">$date</span></div>
			<div><span class="form_output_col_1">שעה רצויה לפגישה מרחוק (אם יש)</span><span class="form_output_col_2">$time</span></div>
			<div><span class="form_output_col_1">הערות (אם יש)</span><span class="form_output_col_2">$notes</span></div>
		</body>
	</html>
	LABEL;

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';

	mail($to, $subject, $message, implode("\r\n", $headers));

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		header('Location: $contact_form_success_webpage');
		exit;
	}

?>
