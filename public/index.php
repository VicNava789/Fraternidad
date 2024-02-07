<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../controllers/EventoController.php";

    $controladorEvento = new EventoController();
    $mensaje = $controladorEvento->crearEvento($_POST);

    echo $mensaje;
    // Aquí podrías redirigir a otra página o mostrar un mensaje de éxito/fallo según el caso
} else {
    include_once "../views/formulario_evento.php";
}
?>
