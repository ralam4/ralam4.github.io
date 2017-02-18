<?php

if(isset($_GET['submit'])) {
   // Prepare the email
$to = 'ralam70@gmail.com';

$name = $_GET['name'];
$mail_from = $_GET['email'];
   $subject = 'Message sent from projectx5w1h';
   $message = $_GET['message'];

$header = "From: $name <$mail_from>";

   // Send it
   $sent = mail($to, $subject, $message, $header);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
}
?>
