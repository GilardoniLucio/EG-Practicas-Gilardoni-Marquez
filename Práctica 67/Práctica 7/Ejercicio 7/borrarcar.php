<?php 
session_start(); 
extract($_GET); 

if(isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro']; 
    unset($carro[md5($id)]); 
    $_SESSION['carro'] = $carro; 
}

header("Location:catalogo.php"); 
?>