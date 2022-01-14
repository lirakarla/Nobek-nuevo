<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$accion = $_POST['accion'];
$mensaje = $_POST['mensaje'];


$message = "Este mensaje fue enviado por: " . $nombre. " \r\n";
$message .= "Su Correo es: " . $correo . " \r\n";
$message .= "Teléfono de contacto: " . $telefono. " \r\n";
$message .= "Desea hacer: " . $accion . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'karla.lira@udem.edu';
$asunto = 'Mensaje desde página NOBEK';

mail($para, $asunto, $message);
echo($message);
header("Location:index.html");
?>

