<?php
$conexion = new mysqli("localhost", "root", "", "capitales");

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>