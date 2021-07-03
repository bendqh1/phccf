<?php
	$message = <<<LABEL
		<html>
			<head>
				<style>
				* {
					font-size: 20px;
				}
				a {
					unicode-bidi: plaintext !important;
				}
				.form_output_col_1 {
					font-weight: bold;
				}
				</style>
			</head>
			<body dir="rtl" style="text-align: right;">
				<div><span class="form_output_col_1">נושא: </span><span class="form_output_col_2">$topic</span></div>
				
				<div><span class="form_output_col_1">שם: </span><span class="form_output_col_2">$name</span></div>
				<div><span class="form_output_col_1">אימייל: </span><a dir="ltr" href="mailto:$email" class="form_output_col_2">$email</a></div>
				
				<div><span class="form_output_col_1">טלפון: </span><a dir="ltr" href="tel:$phone" class="form_output_col_2">$phone</a></div>
				<div><span class="form_output_col_1">אתר: </span><a dir="ltr" href="$url" target="_blank" class="form_output_col_2">$url</a></div>
				
				<div><span class="form_output_col_1">הערות: </span><span class="form_output_col_2">$notes</span></div>
				
				<div><span class="form_output_col_1">תאריך: </span><div class="form_output_col_2">$date</div></div>
				<div><span class="form_output_col_1">שעה: </span><span class="form_output_col_2">$time</span></div>
			</body>
		</html>
	LABEL;
?>
