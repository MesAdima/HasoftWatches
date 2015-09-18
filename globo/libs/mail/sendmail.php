<?php

$mail = new PHPMailer();


$mail->SMTPDebug = 0;

$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Host       = "mail.brainversetechnologies.co.ke"; // SMTP host
$mail->Port       =  26; 
$mail->Username = "adima@brainversetechnologies.co.ke"; // Enter your SMTP username
$mail->Password = "@!AdedeGueth18"; // SMTP password
$webmaster_email = "adima@brainversetechnologies.co.ke"; //Add reply-to email address
$email= $to; // Add recipients email address
$name="Haswatches User"; // Add Your Recipient’s name
$mail->From = $webmaster_email;
$mail->FromName = "Haswatches";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Haswatches");
//$mail->WordWrap = <strong>50</strong>; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
 
$mail->Subject = $subject;
 
$mail->Body = $body;      //HTML Body
 
//$mail->AltBody = "Hi, this is your email body, etc, etc";     //Plain Text Body
if(!$mail->Send()){
$msg[] = "Mailer Error: " . $mail->ErrorInfo;
} else {
$msg[]= "Registration successful, please check your email for a link to activate your account.";
}
?>