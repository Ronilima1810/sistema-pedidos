<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function enviarEmail($destino, $assunto, $mensagem){

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = (getenv('SMTP_HOST') ?: '');
        $mail->SMTPAuth = true;

        $mail->Username = (getenv('SMTP_USERNAME') ?: '');
        $mail->Password = (getenv('SMTP_PASSWORD') ?: '');

        $mail->SMTPSecure = (getenv('SMTP_SECURITY') ?: 'tls');
        $mail->Port = (int)(getenv('SMTP_PORT') ?: '587');

        $mail->setFrom(getenv('SMTP_FROM_EMAIL') ?: $mail->Username, getenv('SMTP_FROM_NAME') ?: 'Pedidos');

        $mail->addAddress($destino);

        $mail->isHTML(true);

        $mail->Subject = $assunto;
        $mail->Body = $mensagem;

        $mail->send();

        return true;

    } catch (Exception $e) {

        return false;
    }
}
?>