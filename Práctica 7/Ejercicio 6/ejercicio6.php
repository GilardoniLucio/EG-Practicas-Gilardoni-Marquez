<?php
session_start();
include 'conexion.php';

$error = "";

if (isset($_POST["mail"])) {
    $mail = $_POST["mail"];
    
    $stmt = $conexion->prepare("SELECT nombre FROM alumnos WHERE mail = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $_SESSION["alumno"] = $fila["nombre"];
        header("Location: ejercicio6.php");
        exit();
    } else {
        $error = "El mail ingresado no existe.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Alumnos</title>
</head>
<body>
    <h1>La Facu</h1>
    <h3>Ingresa tu mail</h3>
    
    <?php if ($error != "") { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <form action="ejercicio6.php" method="post">
        <input type="email" name="mail" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php if (isset($_SESSION["alumno"])) { ?>
        <p style="color: green;">Ingresaste como <?php echo $_SESSION["alumno"]; ?>!</p>
    <?php } ?>
    
    <br>
    <a href="ejercicio6_bienvenida.php">Menu Alumno</a>
</body>
</html>