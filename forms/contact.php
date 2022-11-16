<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $to = 'prettypet2137@gmail.com';

  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  
  $subject = "Message from ".$name." ";
    
  // If there are no errors, send the email
  if (!$errEmail) {
    if (mail ($to, $subject, $message, $from)) {
      $result='<script>alert("Thank You! Mail sent.")</script>';
    } else {
      $result='<script>alert("Sorry there was an error sending your message. Please try again later.")</script>';
    }
  }

  echo $result;

?>
