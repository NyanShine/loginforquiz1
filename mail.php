<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$number= $_POST['mobile'];

$to = "jondah1578@gmail.com";

$subject = "mail from website";
$txt = "Name =" . $name . "\r\nEmail = ". $email . " \r\n
    Message =". $message ."\r\n Mobile number =" . $number;

$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@gmail.com";
if($email !=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirext;
header("Location:thankyou.thml");
?>