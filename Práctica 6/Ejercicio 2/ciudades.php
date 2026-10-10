<?php
require 'abml.php';

if (isset($_GET['accion']) && $_GET['accion'] == 'baja' && isset($_GET['id'])) {
    baja($_GET['id']);
    header("Location: ciudades.php");
    exit();
}

$ciudades = lista();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Ciudades</title>
</head>
<body>

    <h1>Administración de Capitales</h1>

    <div>
        <a href="formulario.php?accion=nueva">Agregar Nueva Ciudad</a>
    </div>
    
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>ciudad</th>
                <th>país</th>
                <th>habitantes</th>
                <th>superficie</th>
                <th>tieneMetro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciudades as $ciudad): ?>
                <tr>
                    <td><?php echo $ciudad['id']; ?></td>
                    <td><?php echo htmlspecialchars($ciudad['ciudad']); ?></td>
                    <td><?php echo htmlspecialchars($ciudad['pais']); ?></td>
                    <td><?php echo $ciudad['habitantes']; ?></td>
                    <td><?php echo $ciudad['superficie']; ?></td>
                    <td><?php echo $ciudad['tieneMetro']; ?></td>
                    <td>
                        <a href="formulario.php?accion=editar&id=<?php echo $ciudad['id']; ?>">Modificar</a> |
                        <a href="ciudades.php?accion=baja&id=<?php echo $ciudad['id']; ?>" onclick="return confirm('Borrar registro?');">Baja</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>