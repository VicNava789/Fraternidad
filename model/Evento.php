<?php
class Evento {
    private $conexion;

    public function __construct($pdo) {
        $this->conexion = $pdo;
    }

    public function crearEvento($nombreEvento, $fecha, $contenido, $rutaImagen) {
        try {
            $consulta = "INSERT INTO eventos (nombre, fecha, contenido, imagen) VALUES (:nombre, :fecha, :contenido, :imagen)";
            $stmt = $this->conexion->prepare($consulta);

            $stmt->bindParam(':nombre', $nombreEvento);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':contenido', $contenido);
            $stmt->bindParam(':imagen', $rutaImagen);

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
