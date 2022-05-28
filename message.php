<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "akashpanchal7000@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email =" . $email . "\r\n Message =" . $message;
$headers = "From: no-reply@cleverstudio.in" . "\r\n" .
"CC: aditya@superbattle.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");
?>