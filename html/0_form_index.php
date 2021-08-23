<!DOCTYPE html>
<html>
	<head>
		<title>יצירת קשר:טופס</title>
		<meta charset="utf-8">
		<?php
			include '0_variables.php';
		?>
	</head>
	<body>
		<form dir="rtl" lang="he" id="contact_form" class="prcf_general_structure" action="../backend/contact_form.php" method="POST">
			<div id="prcf_form_child">
				<?php
					include 'form_header.php';
					include 'form_middle.php';
					include 'form_footer.php';
				?>
			</div>
		</form>
	</body>
</html>
