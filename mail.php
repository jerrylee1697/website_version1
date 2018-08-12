<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jerrl10@uci.edu";
$subject = "Website Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>