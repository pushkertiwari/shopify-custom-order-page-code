<?php
$user_email='sumitjainjain15@gmail.com';
$from_add = "Contact@beetronicsfx.com"; 
$to_add  = $user_email;
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                    
$mail->Host = 'smtp.office365.com';  
$mail->SMTPAuth = true;                              
$mail->Username = 'Contact@beetronicsfx.com';                 
//$mail->Password = 'Sndg@2016$';   
$mail->Password = 'Lipera@2008';                      
$mail->SMTPSecure = 'STARTTLS';                           
$mail->Port = 587;                                

$mail->AddReplyTo('Contact@beetronicsfx.com', 'Reply to beetronicsfx');
$mail->setFrom($from_add, 'Mailer');
$mail->addAddress($to_add);
//$mail->addBCC('info@sanadeeg.com');

//echo '<pre>'; print_r($mail);die;
$mail->isHTML(true);                                

$mail->Subject ="<div style='width:100%;'>";
  $mail->Body =  "this is test email";



if(!$mail->send()) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Success';
    }

?>