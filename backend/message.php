<?php
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
				</style>
			</head>
			<body dir="rtl" style="text-align: right;">
				<div><span class="form_output_col_1">שם: </span><span class="form_output_col_2">$name</span></div>
				<div><span class="form_output_col_1">אימייל: </span><a href="mailto:" dir="ltr" class="form_output_col_2">$email</a></div>
				<div><span class="form_output_col_1">טלפון: </span><a href="tel:" dir="ltr" class="form_output_col_2">$phone</a></div>
				<div><span class="form_output_col_1">נושא: <span class="form_output_col_2">$topic</span></div>
				<div><span class="form_output_col_1">אתר: </span><a href="" dir="ltr" class="form_output_col_2">$url</a></div>
				<div><span class="form_output_col_1">תאריך: </span><span class="form_output_col_2">$date</span></div>
				<div><span class="form_output_col_1">שעה: </span><span class="form_output_col_2">$time</span></div>
				<div><span class="form_output_col_1">הערות: </span><span class="form_output_col_2">$notes</span></div>
			</body>
		</html>
	LABEL;
?>
