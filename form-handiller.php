<?php
$name = $_POST["name"] ; 
$visitor-email = $_POST["email"] ; 
$subject = $_POST["subject"] ; 
$message = $_POST["message"] ; 


$email_from = "abdelkrimkellouche@yahoo.com";

$email_subject = "soumission d'un nouveau formulaire";

$email_body = " User Name : $name.\n ". 
              " User Email : $visitor-email.\n ".
              " Subject : $subject.\n ".
              " User Message: $message.\n ";

$to="krimoleroi13@gmail.com";
$headers=" From: $email-from \r\n";
$headers .= "Reply-To : $visitor-email  \r\n "; 

mail( $to,$email_subject,$email_body,$headers );
header("location : contact.html")
?>