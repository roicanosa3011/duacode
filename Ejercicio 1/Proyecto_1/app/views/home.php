<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
    <script src="../assets/js/jquery.min.js"></script>
</head>
<body>
    <h1>Usuarios</h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
