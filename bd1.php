<?php
$nombre = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$mensaje = $_POST['servicio'];

// Enviar el mensaje al correo electrónico
$correo_destino = 'victorchilapa2004@gmail.com';
mail($correo_destino, 'Formulario de contacto', "Nombre: $nombre\nApellidos: $apellidos\nEdad: $edad\nMensaje: $mensaje");

// Guardar el mensaje en la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=id21189322_login', 'id21189322_login', 'Fredy57dhy*');

$sql = "INSERT INTO solicitudes (nombres, apellidos, edad, correo, servicio) VALUES ('$nombre', '$apellidos', $edad, '$correo', '$mensaje')";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$conexion = null;    

?>
