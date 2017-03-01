<?php
$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$phone = $_POST['contactphone'];
$message = $_POST['contactmessage'];

$formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message";

$recipient = 'mattbrody@codifyacademy.com'; //my email

$subject = "message from frontendmatt.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location: ' . $home_url);
?>