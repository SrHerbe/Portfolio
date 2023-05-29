<?php
require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@herbe.es';
        $mail->Password   = '3469_Herbe*';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('contact@herbe.es', 'Portfolio');
        $mail->addAddress('contact@herbe.es');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Mensaje Portfolio';
        $mail->Body = '<strong>Enviado por:</strong><br> ' . $email . '<br><br><strong>Mensaje:</strong><br>' . $message; 


        $mail->send();
        echo json_encode(["status" => "success", "message" => "Mensaje enviado con éxito!"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Hubo un error al enviar el correo."]);
    }
}
?>
