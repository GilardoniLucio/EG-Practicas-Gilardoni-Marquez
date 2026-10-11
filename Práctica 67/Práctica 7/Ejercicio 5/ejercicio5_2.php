<?php
session_start();

if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["clave"] = $_POST["clave"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Página 2</title>
</head>
<body>
    <h1>Variables creadas</h1>
    <p>Los datos han sido guardados correctamente en la sesión.</p>
    <a href="ejercicio5_3.php">Ir a la tercera página para ver los datos</a>
</body>
</html>