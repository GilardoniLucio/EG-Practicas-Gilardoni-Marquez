<?php 
ob_start("ob_gzhandler"); 
session_start(); 
include 'conexion.php';

if(isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro'];
} else {
    $carro = false;
}

$qry = $conexion->query("SELECT * FROM catalogo ORDER BY producto ASC"); 
?> 
<html> 
<head> 
<title>CATÁLOGO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
    <!-- 
    .catalogo { 
        font-family: Verdana, Arial, Helvetica, sans-serif; 
        font-size: 11px; 
        color: #333333; 
    } 
    --> 
</style> 
</head> 
<body> 
<table width="350" align="center" cellpadding="5" cellspacing="0" style="border: 1px solid #000000;"> 
    <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo"> 
        <td width="170"><strong>Producto</strong></td> 
        <td width="77"><strong>Precio</strong></td> 
        <td width="100" align="right"><a href="vercarrito.php" title="Ver el contenido del carrito">Ver Carrito</a></td> 
    </tr> 
    <?php while($row = $qry->fetch_assoc()){ ?> 
    <tr valign="middle" class="catalogo"> 
        <td><?php echo htmlspecialchars($row['producto']); ?></td> 
        <td>$<?php echo number_format($row['precio'], 2); ?></td> 
        <td align="center">
            <?php 
            if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador'] != md5($row['id'])){ 
            ?>
                <a href="agregarcar.php?id=<?php echo $row['id']; ?>">Agregar</a>
            <?php 
            } else { 
            ?>
                <a href="borrarcar.php?id=<?php echo $row['id']; ?>">Quitar</a>
            <?php 
            } 
            ?>
        </td> 
    </tr>
    <?php } ?> 
</table> 
</body> 
</html> 
<?php 
ob_end_flush(); 
?>