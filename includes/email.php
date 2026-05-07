<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function enviarEmail($destino, $assunto, $mensagem){

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'seuemail@gmail.com';
        $mail->Password = 'senha_app_google';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('seuemail@gmail.com', 'Pedidos Online');

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