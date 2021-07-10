<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'VisuArt web sjedište';
$email_subject = 'Nova poruka od klijenta';
$email_body = "Ime i prezime: $name.\n"."Email: $email.\n"."Poruka: $message.\n";


$to ="ana.novokmet@hotmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:hvala.html");

?>