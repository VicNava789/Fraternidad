<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/variables.css" rel="stylesheet">

    <link href="/assets/img/LOGOFINAL2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assets/css/foohed.css">
    <link rel="stylesheet" href="assets/css/crearcuen.css">
    <title>Crear Cuenta - MiPlataforma</title>
    <script>
        function validatePasswords() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                document.getElementById("passwordMismatch").style.display = "block";
                return false;
            } else {
                document.getElementById("passwordMismatch").style.display = "none";
                return true;
            }
        }
    </script>
</head>
<body>
<?php
    include("template/header.php")
    ?>
    <div class="container">
        <form class="signup-form" onsubmit="return validatePasswords();" method="post" action="crearcuen.php">
            <h1>Crear Cuenta</h1>
            <input type="text" name="username" placeholder="Nombre de usuario" class="input-field">
            <input type="email" name="email" placeholder="Correo electrónico" class="input-field">
            <input type="password" id="password" name="password" placeholder="Contraseña" class="input-field">
            <input type="password" id="confirmPassword" placeholder="Confirmar contraseña" class="input-field">
            <div id="passwordMismatch" class="error">Las contraseñas no coinciden.</div>
            <button type="submit" class="signup-button">Registrarse</button>
            <p class="login-link">¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
        </form>
    </div>
</body>
</html>