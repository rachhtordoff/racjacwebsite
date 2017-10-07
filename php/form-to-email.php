<?php
$email_to = "rhtordoff@gmail.com";
$name = $_POST["name"];
$email_from = $_POST["email"];
$message = $_POST["message"];
$number = $_POST["number"];
$email_subject = "An equiry has been made from the finance south west website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n";

$message = "Name: ". $name . "\r\nMessage: " . $message . "\r\Email: " . $email_from . "\r\Number: " . $number;
ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f".$email_from);
if ($sent)
{
header("Location: ../Index.html");
} else {
echo "There has been an error sending your message. Please try later.";
}
?>
