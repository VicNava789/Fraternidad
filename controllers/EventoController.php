<?php
include_once "../config/database.php";
include_once "../models/Evento.php";

class EventoController {
    public function crearEvento($datosEvento) {
        $eventoModelo = new Evento($GLOBALS['pdo']);

        // Procesar los datos recibidos del formulario
        $nombreEvento = $datosEvento['first-name'];
        $fecha = $datosEvento['last-name'];
        $contenido = $datosEvento['contenido'];

        $imagen = $_FILES['img'];
        $directorioDestino = "../img/"; // Ruta de destino
        $rutaImagenDestino = $directorioDestino . $imagen['name'];
        move_uploaded_file($imagen['tmp_name'], $rutaImagenDestino);

        // Insertar evento usando el modelo Evento
        if ($eventoModelo->crearEvento($nombreEvento, $fecha, $contenido, $rutaImagenDestino)) {
            return "El evento se ha creado correctamente.";
        } else {
            return "Ha ocurrido un error al crear el evento.";
        }
    }
}
?>
