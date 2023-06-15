<?php
// index.php

// Cargar el controlador principal
require_once '../app/controllers/EquipoController.php';

// Crear una instancia del controlador
$controller = new EquipoController();

// Determinar la acción solicitada
$action = $_GET['action'] ?? 'index';

// Enrutamiento de acciones
switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'view':
        $controller->view();
        break;
    default:
        $controller->index();
        break;
}
