<?php
    $email = $_POST['community-email'];
    $message = $_POST['community-message'];
    $name = $_POST['community-name'];

    $subject = "=?utf-8?B?" . base64_encode("Community from $name") . "?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain;charset=utf-8\r\n\"";

    mail("80085-admin@eledeen.org", "$subject", "$message", "$headers");
    header('Location: /community.php#home');
