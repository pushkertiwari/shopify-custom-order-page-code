<?php

echo "strtotime";
die;
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new /Swift_SmtpTransport('smtp.office365.com', 587,'STARTTLS'))
  ->setUsername('Contact@beetronicsfx.com')
  ->setPassword('Lipera@2008')
;

// Create the Mailer using your created Transport
$mailer = new /Swift_Mailer($transport);

// Create a message
$message = (new /Swift_Message('Wonderful Subject'))
  ->setFrom(['gurpreet@revinfotech.com' => 'John Doe'])
  ->setTo([ 'revtest745@gmail.com' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
echo "Done";
?>