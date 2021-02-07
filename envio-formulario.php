<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$texto = $_POST['texto'];

$destino = "milbelis@gmail.com";

$asunto = "Consulta desde landing";

$mensaje = "Nombre: ".$nombre."\r\n";
$mensaje .= "Email: ".$email."\r\n";
$mensaje .= "Texto: ".$texto."\r\n";

$remitente = "From: algo@correo.mx";

mail($destino, $asunto, $mensaje, $remitente);

header("Location:index.php?i=ok");
