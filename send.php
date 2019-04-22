<?php
if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message'])) {
	require("class.phpmailer.php"); //you have to download this plugin from github.com - link is in documentation

	$firstname = 	$_POST['firstname'];
	$email = 		$_POST['email'];
	$message = 		$_POST['message'];

	$mail = new PHPMailer();

	$mail->From = $email;
	$mail->CharSet = "UTF-8";
	$mail->FromName = $email;
	$mail->addAddress("cembuyuk7@gmail.com");

	$mail->IsHTML(true);
	$mail->Subject = $firname." sent you an email";

	$mail->Body = $message."<br><br>".$firstname."<br>".$email."<br>".$phone."<br>";

	$mail->send();
}
?>
