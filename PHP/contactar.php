<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fechaReg = date("d/m/y");
$miCorreo = 'bautte47@gmail.com';
$asunto = 'Mi formulario Web';
$encabezado = 'Mensaje enviado desde tu portafolio web';
$cuerpoCorreo = $mensaje . "\nContacto: " . $email . "\nAtentamente: " . $nombre;

if(strlen($_POST['nombre']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['mensaje']) > 1){

    echo mail($miCorreo,$asunto,$cuerpoCorreo,$encabezado);
}
?>