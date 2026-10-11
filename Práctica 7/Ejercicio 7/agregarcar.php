<?php 
session_start(); 
extract($_REQUEST); 
include 'conexion.php';

if(!isset($cantidad)){ $cantidad = 1; } 

$stmt = $conexion->prepare("SELECT * FROM catalogo WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$row = $stmt->get_result()->fetch_assoc();

if(isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro']; 
}

$carro[md5($id)] = array(
    'identificador' => md5($id),
    'cantidad' => $cantidad,
    'producto' => $row['producto'],
    'precio' => $row['precio'],
    'id' => $id
); 

$_SESSION['carro'] = $carro; 

header("Location:catalogo.php"); 
?>