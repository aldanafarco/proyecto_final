<?php
$destinatario = 'aldanavero.af@gmail.com';
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "enviado desde la página Belgrano celulares";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
?>