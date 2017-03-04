<?php

if(isset($_POST["submit"])) {
   // Prepare the email
   $to = "ralam70@gmail.com";

   $name = $_POST["name"];
   $mail_from = $_POST["email"];
      $subject = 'Message sent from Project 5W1H';
      $message = $_POST["message"];
      //Check for header injections
function has_header_injection($str){
        return preg_match("/[\r\n]/",$str);
}
if (has_header_injection($name) || has_header_injection($email)) {
  die(); //if true, kill script
}
   $header = "From: $name <$mail_from>";

   // Send it
   $sent = mail($to, $subject, $message, $header);
   if($sent) {
   echo "Your message has been sent successfully!";
   } else {
   echo "Sorry, your message could not send. Try again";
   exit;
   }
}
?>
