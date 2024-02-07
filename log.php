<?php
$login_usuario = $_POST['login_usuario'];
$login_contrasena = $_POST['login_contrasena'];
session_start();
$_SESSION['login_usuario'] = $login_usuario;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contra";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Consulta para verificar las credenciales en la base de datos
    $sql = "SELECT * FROM usuarios_login WHERE usuario='$login_usuario' AND contrasena='$login_contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas, redirigir a otra página
        header("Location: gentelella-master/production/index.php");
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        ?>
        <h1 class="bad">Error en la autenticación</h1>
        <br>

        <?php
        include("login.php");
        ?>
        <?php
    }
}

$conn->close();
?>
