<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Bienvenida</title>
</head>
<body>
    <?php if (isset($_SESSION["alumno"])) { ?>
        <h1>Menu Alumnos</h1>
        <h2>Bienvenido, <?php echo $_SESSION["alumno"]; ?>!</h2>
    <?php } else { ?>
        <h2>No puedes acceder a esta página.</h2>
    <?php } ?>
    <hr>

    <a href="ejercicio6.php">Volver</a>
</body>
</html>