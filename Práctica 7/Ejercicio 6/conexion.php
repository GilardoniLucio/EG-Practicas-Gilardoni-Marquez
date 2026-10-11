<?php
$conexion = new mysqli("localhost", "root", "", "base2");

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>