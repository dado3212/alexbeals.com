<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	require_once('class.phpmailer.php');
	include('class.smtp.php');
	include("secret.php");

	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['message'] != "") {
		$mail             = new PHPMailer();

		$body             = '<b>Email:</b> ' . $_POST['email'] . "<br><br><b>Message:</b><br>" . nl2br($_POST['message']);

		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
		$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->Username   = "alexcbeals@gmail.com";  // GMAIL username
		$mail->Password   = $gmail_password;            // GMAIL password

		$mail->SetFrom($_POST['email'], $_POST['name']);
		$mail->AddReplyTo($_POST['email'], $_POST['name']);

		$mail->Subject    = "(alexbeals.com) Contact Email from " . $_POST['name'];

		$mail->MsgHTML($body);

		$mail->AddAddress("alexcbeals@gmail.com", "Alex Beals");

		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		  echo "failure";
		} else {
		  echo "success";
		}
	} else {
		echo 'failure';
	}
?>