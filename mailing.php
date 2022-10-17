<?php

    $email = $_POST['mailing-email'];

    $subject = "=?utf-8?B?".base64_encode("Mailing Subscription")."?=";
    $message = "New mailing sub from $email";

    mail("80085-admin@eledeen.org", "$subject", "$message");
    header('Location: /index.php#home');
