<?php
if (!isset($_COOKIE["contador"])) {
    $contador = 1;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
} else {
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php if ($contador == 1) { ?>
            <h1>Bienvenido a la página</h1>
        <?php } else { ?>
            <h1><?php echo "Visitaste ".$contador." páginas"; ?></h1>
        <?php } ?>
        <a href="ejercicio2.php">Navegar</a>
    </body>
</html>