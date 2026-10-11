<?php
$conexion = new mysqli("localhost", "root", "", "Compras");

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>