<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$submit = $_POST['submit'];
	$formcontent=" From: $name \n subject: $phone \n  Message: $message";
	$recipient = "jayashree.manickavel@gmail.com";
	$subject = "Add Your Subject Here";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("location: thank-you.html")
?>