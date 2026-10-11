<?php
if (isset($_POST["titular"])) {
    setcookie("titular", $_POST["titular"], time() + (60 * 60 * 24 * 90));
    header("Location: ejercicio4.php");
    exit();
}

$titular = "";
if (isset($_COOKIE["titular"])) {
    $titular = $_COOKIE["titular"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Periódico</title>
</head>
<body>
    <h1>El Periódico</h1>

    <?php if ($titular == "" || $titular == "politica") { ?>
        <h2>Noticia Política</h2>
        <p>El presidente anunció nuevas medidas para el próximo año.</p>
    <?php } ?>

    <?php if ($titular == "" || $titular == "economica") { ?>
        <h2>Noticia Económica</h2>
        <p>La bolsa cerró con un aumento histórico del 5%.</p>
    <?php } ?>

    <?php if ($titular == "" || $titular == "deportiva") { ?>
        <h2>Noticia Deportiva</h2>
        <p>El equipo local ganó el campeonato mundial.</p>
    <?php } ?>

    <hr>

    <h3>Configurar preferencias</h3>
    <form action="ejercicio4.php" method="post">
        <input type="radio" name="titular" value="politica" required> Mostrar solo Noticia Política<br>
        <input type="radio" name="titular" value="economica"> Mostrar solo Noticia Económica<br>
        <input type="radio" name="titular" value="deportiva"> Mostrar solo Noticia Deportiva<br>
        <br>
        <input type="submit" value="Guardar preferencia">
    </form>

    <br>
    <a href="ejercicio4_borrar.php">Borrar preferencias</a>
</body>
</html>