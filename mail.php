<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];
$to = "maaran1314@mail.com";
$subject = "Mail From Profile Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Number=" . $number;
$headers = "From: noreply@maaran1314.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("thanks.html");
?>