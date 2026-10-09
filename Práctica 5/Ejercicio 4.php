<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php $_SESSION["contador"] = !isset($_SESSION["contador"]) ? 1 : ++$_SESSION["contador"];?>
        <h1><?php echo "Visitaste ".$_SESSION["contador"]." páginas"?></h1>
        <a href="Ejercicio 4.php">Navegar</a>
    </body>
</html>