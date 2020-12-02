<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/Exception.php';
require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php'; 

$body = "Nombre: " . $nombre . "<br>Correo :"  . $correo . "<br>Telefono :"  . $telefono . "<br>Mensaje :"  . $mensaje;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'danmagan25@gmail.com';                     // SMTP username
    $mail->Password   = 'araceli95';                               // SMTP password
    $mail->SMTPSecure ='tls';         // Enable TLS encryption; 
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for 

    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('danmagan25@gmail.com', 'Joe User');     // Add a recipient
            
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = $body;

    $mail->send();
    echo '<script> alert("Mensaje enviado correctamente.");
    window.history.go(-1);</script>';
} catch (Exception $e) {
    echo '<script> alert("Error.")</script>';
}