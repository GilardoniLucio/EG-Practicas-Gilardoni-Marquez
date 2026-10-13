<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['palabra'])) {
    $palabra = $_POST['palabra'];
    $parametro = "%" . $palabra . "%";

    $stmt = $conexion->prepare("SELECT * FROM buscador WHERE canciones LIKE ?");
    $stmt->bind_param("s", $parametro);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    header("Location: form_buscador.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
    <h2 align="center">Resultados de Búsqueda</h2>
    
    <div align="center">
        <?php if ($resultado->num_rows == 0) { ?>
            <p>No hay resultados.</p>
        <?php } else { ?>
            <table border="1" cellpadding="5" cellspacing="0" width="400">
                <tr>
                    <th bgcolor="#DFDFDF">Canciones Encontradas</th>
                </tr>
                <?php while ($fila = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila['canciones']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        
        <br>
        <p><a href="form_buscador.php">Volver al Buscador</a></p>
    </div>
</body>
</html>