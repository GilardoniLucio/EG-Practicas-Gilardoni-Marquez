<?php
require 'abml.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btn_alta'])) {
        alta($_POST['ciudad'], $_POST['pais'], $_POST['habitantes'], $_POST['superficie'], $_POST['tieneMetro']);
    } elseif (isset($_POST['btn_modificar'])) {
        modificacion($_POST['id'], $_POST['ciudad'], $_POST['pais'], $_POST['habitantes'], $_POST['superficie'], $_POST['tieneMetro']);
    }
    header("Location: ciudades.php");
    exit();
}

$ciudad_editar = null;

if (isset($_GET['accion']) && $_GET['accion'] == 'editar' && isset($_GET['id'])) {
    $ciudad_editar = obtener_ciudad($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Ciudad</title>
</head>
<body>

    <h1><?php echo $ciudad_editar ? 'Modificar Ciudad' : 'Alta de Ciudad'; ?></h1>

    <div>
        <a href="ciudades.php">Volver al Listado</a>
    </div>

    <br>

    <form action="formulario.php" method="POST">
        
        <?php if ($ciudad_editar): ?>
            <label>ID:</label><br>
            <input type="number" name="id" value="<?php echo $ciudad_editar['id']; ?>" readonly><br><br>
        <?php endif; ?>
        
        <label>Ciudad:</label><br>
        <input type="text" name="ciudad" value="<?php echo $ciudad_editar ? htmlspecialchars($ciudad_editar['ciudad']) : ''; ?>" required><br><br>
        
        <label>País:</label><br>
        <input type="text" name="pais" value="<?php echo $ciudad_editar ? htmlspecialchars($ciudad_editar['pais']) : ''; ?>" required><br><br>
        
        <label>Habitantes:</label><br>
        <input type="number" name="habitantes" value="<?php echo $ciudad_editar ? $ciudad_editar['habitantes'] : ''; ?>" required><br><br>
        
        <label>Superficie:</label><br>
        <input type="number" step="0.01" name="superficie" value="<?php echo $ciudad_editar ? $ciudad_editar['superficie'] : ''; ?>" required><br><br>
        
        <label>Tiene Metro?</label><br>
        <select name="tieneMetro">
            <option value="1" <?php echo ($ciudad_editar && $ciudad_editar['tieneMetro'] == 1) ? 'selected' : ''; ?>>Sí</option>
            <option value="0" <?php echo ($ciudad_editar && $ciudad_editar['tieneMetro'] == 0) ? 'selected' : ''; ?>>No</option>
        </select><br><br>
        
        <?php if ($ciudad_editar): ?>
            <input type="submit" name="btn_modificar" value="Guardar Cambios">
        <?php else: ?>
            <input type="submit" name="btn_alta" value="Guardar Ciudad">
        <?php endif; ?>
    </form>

</body>
</html>