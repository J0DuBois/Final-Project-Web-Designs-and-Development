<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "feedback@example.com";
  $subject = "Feedback from $name";
  $headers = "From: $email\r\n";
  
  mail($to, $subject, $message, $headers);
?>