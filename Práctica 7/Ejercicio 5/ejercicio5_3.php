<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Página 3</title>
</head>
<body>
    <h1>Valores recuperados</h1>
    
    <?php if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) { ?>
        <p>El nombre de usuario es: <strong><?php echo $_SESSION["usuario"]; ?></strong></p>
        <p>La clave es: <strong><?php echo $_SESSION["clave"]; ?></strong></p>
    <?php } else { ?>
        <p>No se encontraron datos en la sesión.</p>
    <?php } ?>

    <br>
    <a href="ejercicio5_1.php">Volver al inicio</a>
</body>
</html>