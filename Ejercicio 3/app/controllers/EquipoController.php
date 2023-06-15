<?php
// EquipoController.php

class EquipoController {
    public function index() {
        // Obtener todos los equipos
        $equipos = EquipoModel::getAllEquipos();

        // Cargar la vista
        require_once '../app/views/equipo/index.php';
    }

    public function create() {
        // Cargar la vista de creación de equipo
        require_once '../app/views/equipo/create.php';
    }

    public function store() {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'] ?? '';
        $ciudad = $_POST['ciudad'] ?? '';
        $deporte = $_POST['deporte'] ?? '';
        $fecha = $_POST['fecha'] ?? '';

        // Validar los datos (ejemplo)
        if (empty($nombre) || empty($fecha)) {
            echo 'Por favor, complete todos los campos requeridos.';
            return;
        }

        // Crear un nuevo objeto Equipo
        $equipo = new EquipoModel($nombre, $ciudad, $deporte, $fecha);

        // Guardar el equipo en la base de datos
        $equipo->save();

        // Redireccionar a la página de información del equipo
        header('Location: index.php?action=view&id=' . $equipo->getId());
        exit;
    }

    public function view() {
        // Obtener el ID del equipo desde la URL
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo 'ID de equipo inválido.';
            return;
        }

        // Obtener el equipo por su ID
        $equipo = EquipoModel::getEquipoById($id);

        if (!$equipo) {
            echo 'No se encontró el equipo solicitado.';
            return;
        }

        // Cargar la vista de información del equipo
        require_once '../app/views/equipo/view.php';
    }
}
