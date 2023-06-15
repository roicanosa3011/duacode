<!-- view.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Información del Equipo</title>
</head>
<body>
    <h1>Información del Equipo</h1>
    <ul>
        <li>ID: <?php echo $equipo['id']; ?></li>
        <li>Nombre: <?php echo $equipo['nombre']; ?></li>
        <li>Ciudad: <?php echo $equipo['ciudad']; ?></li>
        <li>Deporte: <?php echo $equipo['deporte']; ?></li>
        <li>Fecha: <?php echo $equipo['fecha']; ?></li>
    </ul>
</body>
</html>
