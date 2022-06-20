<?php ob_start();

    if(isset($_POST['submit'])) {
        $to="your own email";
        $subject=$_POST["subject"];
        $email=$_POST["email"];
        $txt=$_POST["message"];
        $headers="From: " .$email . "\r\n";

        mail($to, $subject, $message, $headers);
        header("Location: contact.html");
    }
?>