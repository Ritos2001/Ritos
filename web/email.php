<?php
    $to      = "martinezaragon22@gmail.com";
    $subject = 'Peticion a Ritos';
    $message = "hola";
    $headers = 'From: martinezaragon22@gmail,con'       . "\r\n" .
                 'Reply-To: martinezaragon22@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
