<?php


$name=$_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$to = "iulicaa299@gmail.com";

$headers = "From: " .$visitor_email;
$email_subject =  "New Form Submission";

$email_body = "Ati primit un mesaj de la: " .$name. ".\r\n". $message;

if($email!=NULL){
    mail($to,$email_subject,$email_body,$headers);
}

    header("Location: helpa.html");

?>