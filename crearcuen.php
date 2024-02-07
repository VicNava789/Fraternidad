<?php
// $servername = "localhost";
// // $username = "id21189322_login";
// // $password = "Fredy57dhy*";
// // $dbname = "id21189322_login";
// $username = "root";
// $password = "";
// $dbname = "contra";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// }

// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $sql = "INSERT INTO usuarios_login (usuario, correo, contrasena) VALUES ('$username', '$email', '$password')";

// if ($conn->query($sql) === TRUE) {
//     echo "Registro exitoso";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();





// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configura la conexión a tu base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contra";

    try {
        // Crear conexión usando PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Habilitar mensajes de error de PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['password'];

        // Preparar la consulta para insertar los datos en la base de datos
        $stmt = $conn->prepare("INSERT INTO usuarios_login (usuario, correo, contrasena) VALUES (:nombre, :correo, :contrasena)");

        // Vincular parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);

        // Ejecutar la consulta
        $stmt->execute();

        echo "¡Registro exitoso!";
    } catch(PDOException $e) {
        echo "Error al registrar: " . $e->getMessage();
    }


    // Cerrar la conexión
    $conn = null;
}
header('location: login.php');





?>

