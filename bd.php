<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "id21189322_login";
$password = "Fredy57dhy*";
$dbname = "id21189322_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$servicio = $_POST["servicio"];

// Insertar datos en la tabla
$sql = "INSERT INTO solicitudes (nombres, apellidos, edad, correo, servicio) VALUES ('$nombres', '$apellidos', '$edad', '$correo', '$servicio')";

if ($conn->query($sql) === TRUE) {
    echo "Datos enviados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
