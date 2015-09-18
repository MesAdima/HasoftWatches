<?php
include ('libs/PHPMailer/class.smtp.php');
include ('libs/PHPMailer/class.phpmailer.php');

function Send_Mail($to,$subject,$body)
{
//require 'class.phpmailer.php';

$from       = "activation@haswatches.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "brainversetechnologies.co.ke"; // SMTP host
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "adima@brainversetechnologies.co.ke";  // SMTP  username
$mail->Password   = "@!AdedeGueth18";  // SMTP password
$mail->SetFrom($from, 'Haswatches Activation');
$mail->AddReplyTo($from,'Haswatches Activation');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($to,'Haswatches User');


//This just tries to return a true when action is successful
//This will help you figure out where exactly the problem is :)

if($mail->Send()){
	return true;
}else{

	return false;
}
}

?>