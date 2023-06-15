<?php
// EquipoModel.php

class EquipoModel {
    private $id;
    private $nombre;
    private $ciudad;
    private $deporte;
    private $fecha;

    public function __construct($nombre, $ciudad, $deporte, $fecha) {
        $this->id = uniqid(); // Generar un identificador único
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->deporte = $deporte;
        $this->fecha = $fecha;
    }

    public function getId() {
        return $this->id;
    }

    public function save() {
        // Conectar a la base de datos
        require_once '../database/db.php';

        // Preparar la consulta
        $stmt = $connection->prepare('INSERT INTO equipos (id, nombre, ciudad, deporte, fecha) VALUES (?, ?, ?, ?, ?)');

        // Vincular los parámetros
        $stmt->bind_param('sssss', $this->id, $this->nombre, $this->ciudad, $this->deporte, $this->fecha);

        // Ejecutar la consulta
        $stmt->execute();

        // Cerrar la conexión
        $stmt->close();
        mysqli_close($connection);
    }

    public static function getAllEquipos() {
        // Conectar a la base de datos
        require_once '../database/db.php';

        // Realizar la consulta
        $query = "SELECT * FROM equipos";
        $result = mysqli_query($connection, $query);

        // Obtener los resultados
        $equipos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $equipos[] = $row;
        }

        // Cerrar la conexión
        mysqli_close($connection);

        return $equipos;
    }

    public static function getEquipoById($id) {
        // Conectar a la base de datos
        require_once '../database/db.php';

        // Preparar la consulta
        $stmt = $connection->prepare('SELECT * FROM equipos WHERE id = ?');

        // Vincular el parámetro
        $stmt->bind_param('s', $id);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();
        $equipo = $result->fetch_assoc();

        // Cerrar la conexión
        $stmt->close();
        mysqli_close($connection);

        return $equipo;
    }
}
