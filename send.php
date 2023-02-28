<?php

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host     = 'smtp-relay.sendinblue.com';
    $mail->SMTPSecure = 'tls';
    $mail->Port     = 587;

    $mail->Username = 'emilie.atinault@gmail.com';
    $mail->Password = '****************';


    $mail->setFrom($email, $nom, $prenom);
    $mail->addAddress('emili32510@gmail.com');

    $mail->Subject = "Message du site internet";
    $mail->Body = $message;
    $mail->send();
    header("Location: sent.html");
} catch (Exception $e) {
    echo "Votre message n'a pas pu être envoyé. Erreur du mailer: {$mail->ErrorInfo}";
}
