<?php

require 'PHPMailerAutoload.php';
//require 'class.phpmailer.php';

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "jauzmendiji14dw@ikzubirimanteo.com";                 
$mail->Password = "Secret pass";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "jauzmendiji14dw@ikzubirimanteo.com";
$mail->FromName = "Jon Auzmendi";

$mail->addAddress("jauzmen@gmail.com", "Jon Auzmendi");

$mail->isHTML(true);

$mail->Subject = "Lehen Mezua";
$mail->Body = "<i>Atera da!!!</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

?>
    