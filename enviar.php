<?php

//llamado desde formulario.html

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"]

//Datos de envio

$destinatario = "danielacrapa@gmail.com";
$asunto = "Contacto desde ntra web";

$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Mensaje: $mensaje";

//Envio de mensaje
mail($destinatario, $asunto, $carta);
header("Location: mensaje-de-envio.html");

?>