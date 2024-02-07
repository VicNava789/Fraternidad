<!DOCTYPE html>
<html lang="es">
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
  <link rel="stylesheet" href="assets/css/contacto.css">
  <title>Formulario de Solicitud</title>
</head>
<body>
<?php
    include("template/header.php")
    ?>
  <div class="container">
    <form action="bd1.php"  method="POST" class="formulario">
      <h2>Solicitud de Servicio</h2>
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" required>
      
      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" required>
      
      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" required>
      
      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" required>
      
      <label for="servicio">Servicio a Solicitar:</label>
      <textarea id="servicio" name="servicio" required></textarea>
      
      <button type="submit">Enviar Solicitud</button>
    </form>
  </div>
</body>
</html>
