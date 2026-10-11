<?php
function alta($ciudad, $pais, $habitantes, $superficie, $tieneMetro) {
    include 'conexion.php';
    $stmt = $conexion->prepare("INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssidi", $ciudad, $pais, $habitantes, $superficie, $tieneMetro);
    $stmt->execute();
}

function baja($id) {
    include 'conexion.php';
    $stmt = $conexion->prepare("DELETE FROM Ciudades WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

function modificacion($id, $ciudad, $pais, $habitantes, $superficie, $tieneMetro) {
    include 'conexion.php';
    $stmt = $conexion->prepare("UPDATE Ciudades SET ciudad = ?, pais = ?, habitantes = ?, superficie = ?, tieneMetro = ? WHERE id = ?");
    $stmt->bind_param("ssidii", $ciudad, $pais, $habitantes, $superficie, $tieneMetro, $id);
    $stmt->execute();
}

function lista() {
    include 'conexion.php';
    $result = $conexion->query("SELECT * FROM Ciudades");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function obtener_ciudad($id) {
    include 'conexion.php';
    $stmt = $conexion->prepare("SELECT * FROM Ciudades WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_assoc();
}
?>