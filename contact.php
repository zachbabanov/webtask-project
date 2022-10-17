<?php
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];
    $name = $_POST['contact-name'];

    $subject = "=?utf-8?B?".base64_encode("Claim for $name")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain;charset=utf-8\r\n\"";

    mail("80085-admin@eledeen.org", "$subject", "$message", "$headers");
    header('Location: /index.php#contact');
