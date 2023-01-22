<?php

if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['message'])) {
    $to = trim(strip_tags($_POST['email']));
    $message = trim(strip_tags($_POST['message']));
    $subject = "Email a envoyé";
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) { // verifie si l'adresse mail est valide.
        if (strlen($message <= 500)) {
            if (mail($to, $subject, $message)) {
                echo "Email envoyé";
            } else {
                echo "Échec de l'envoi";
            }
        }
    }
}


