<?php



$host = 'localhost';
$dbname = 'nombre_base_de_datos';
$user = 'usuario';
$password = 'contraseña';


$connection = mysqli_connect($host, $user, $password, $dbname);


if (!$connection) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
