<?php
  $to = "modishyy@gmail.com";
  $subject = "New message from your website";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);

  header('Location: thank_you.html');
?>
