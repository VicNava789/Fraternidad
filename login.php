<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/boton.css">
    <title>Login</title>
</head>

<body>

    <div class="conta">
        <a class="button" href="index.php">Regresar</a>
    </div>    
   

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="crearcuen.php" method="post" >
                <h1>Crear Cuenta</h1>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span> -->
                <input type="text" placeholder="Nombre" name="nombre" id="nameUsuario" required>
                <input type="email" placeholder="Correo Electronico" name="correo" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <button id="crear">Crear Cuenta</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="log.php" method="POST">
                <h1>Iniciar Sesion</h1>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> -->
                <!-- <span>or use your email password</span> -->
                <input type="text" id="login_usuario" name="login_usuario" placeholder="Usuario" required>
                <input type="password" id="login_contrasena" name="login_contrasena" placeholder="Contraseña" required>
                <a href="olvideContra.php">Olvidaste tu Contraseña?</a>
                <button type="submit" >Iniciar Sesion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido de Nuevo !</h1>
                    <!-- <p>Enter your personal details to use all of site features</p> -->
                    <button class="hidden" id="login">Iniciar Sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola, Amigo!</h1>
                    <!-- <p>Register with your personal details to use all of site features</p> -->
                    <button class="hidden" id="register">Crear Cuenta</button>
                </div>
            </div>
        </div>
    </div>

    

    <script src="assets/js/script.js"></script>
</body>

</html>