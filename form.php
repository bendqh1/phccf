<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
