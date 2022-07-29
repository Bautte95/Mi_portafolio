<?php
include("con_db.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentarios'];
$fechaReg = date("d/m/y");

if(strlen($_POST['nombre']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['comentarios']) > 1){

    $envio = "INSERT INTO form_contacto(nombre, email, cometarios, fecha_envio) VALUES ('$nombre','$email','$comentario','$fechaReg')";

    echo mysqli_query($conexion,$envio);
}
?>