<?php
if(isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
} else {
    if (isset($_COOKIE["nombre"])) {
        $nombre = $_COOKIE["nombre"];
    }
}
?>
<html>
<head>
    <title>Cookies en PHP</title>
</head>
<body>
    <?php if (!isset($nombre)) { ?>
        <h1>Bienvenido a la página</h1>
    <?php } else { ?>
        <h1><?php echo "Bienvenido ".$nombre."!"; ?></h1>
    <?php } ?>
    <form action="ejercicio3.php" method="post"> Ingresa su nombre:
        <br>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="submit" value="Actualizar el nombre">
    </form>
</body>
</html>