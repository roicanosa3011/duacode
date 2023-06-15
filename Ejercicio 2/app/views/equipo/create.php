<!-- create.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Crear Equipo</title>
    <script src="../assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Validación del formulario con jQuery
            $('form').submit(function(event) {
                event.preventDefault();

                // Validar los campos requeridos
                var nombre = $('#nombre').val();
                var fecha = $('#fecha').val();

                if (nombre.trim() === '' || fecha.trim() === '') {
                    alert('Por favor, complete todos los campos requeridos.');
                    return;
                }

                // Enviar el formulario
                this.submit();
            });
        });
    </script>
</head>
<body>
    <h1>Crear Equipo</h1>
    <form method="POST" action="index.php?action=store">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad"><br>

        <label for="deporte">Deporte:</label>
        <select id="deporte" name="deporte">
            <option value="Fútbol">Fútbol</option>
            <option value="Baloncesto">Baloncesto</option>
            <option value="Tenis">Tenis</option>
        </select><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha"><br>

        <input type="submit" value="Crear">
    </form>
</body>
</html>
