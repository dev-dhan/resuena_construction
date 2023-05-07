<?php

$name;
$email;
$message;

if (isset($_POST['fullname'])) {
    $name = $_POST['fullname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}


$to = "johnpaulnarvasa6@gmail.com, analyn.pagador.ampo@gmail.com, dandrev.oclarit.barrio@gmail.com, roldhan.alcantara.fulo@gmail.com, adsvanced.media.tech@gmail.com, resuena_construction@yahoo.com, dhon_resuena@yahoo.com";
$subject = "Resuena Construction - Website Inquiry";

$email_body = "<strong>Name:</strong> $name <br>";
$email_body .= "<strong>E-mail:</strong> $email <br>";
// $email_body .= "<strong>Phone Number:</strong> $number <br>";
$email_body .= "<strong>Message:</strong> $message <br>";

$headers = "From: noreply@resuenaconstruction.com\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.    
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

echo 'Your message has been sent. Thank you!';
mail($to, $subject, $email_body, $headers);
