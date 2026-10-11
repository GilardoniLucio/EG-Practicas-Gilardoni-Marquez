<?php 
session_start(); 

if (isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro']; 
} else {
    $carro = array();
}

$products = ''; 
$products2 = ''; 

if (!empty($carro)) {
    foreach($carro as $k => $v) { 
        $unidad = $v['cantidad'] > 1 ? " unidades de " : " unidad de "; 
        $products .= $v['cantidad'] . $unidad . $v['producto'] . " + "; 
        $products2 .= $v['cantidad'] . $unidad . $v['producto'] . ", "; 
    } 

    $products = substr($products, 0, (strlen($products) - 1)); 
    $products2 = substr($products2, 0, (strlen($products2) - 2)); 
}

$costo = isset($_GET['costo']) ? $_GET['costo'] : 0;
?> 
<html> 
<head> 
<title>Finalizar Compra</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style type="text/css"> 
.tit { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 11px; 
    color: #FFFFFF; 
} 
.prod { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 11px; 
    color: #333333; 
} 
h1 { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 20px; 
    color: #990000; 
} 
</style> 
</head> 
<body> 

<form action="https://www.paypal.com/cgi-bin/webscr" name="f1" id="f1" method="post" target="_blank"> 
    <fieldset> 
        <legend class="prod"><strong>Finalizar la Compra</strong></legend> 
        
        <input type="hidden" name="shipping" value="0"> 
        <input type="hidden" name="cbt" value="Presione aquí para volver a www.nuestrositio.com >>"> 
        <input type="hidden" name="cmd" value="_xclick"> 
        <input type="hidden" name="rm" value="2"> 
        <input type="hidden" name="bn" value="nombre de la empresa vendedora"> 
        <input type="hidden" name="business" value="maildelvendedor@dominio.com"> 
        <input type="hidden" name="item_name" value="<?php echo htmlspecialchars($products2); ?>"> 
        <input type="hidden" name="item_number" value="Nombre del comprador"> 
        <input type="hidden" name="amount" value="<?php echo number_format($costo, 2, '.', ''); ?>"> 
        <input type="hidden" name="custom" value="<?php echo htmlspecialchars($costo); ?>"> 
        <input type="hidden" name="currency_code" value="USD"> 
        <input type="hidden" name="image_url" value=""> 
        <input type="hidden" name="return" value="http://localhost/ipn_success.php"> 
        <input type="hidden" name="cancel_return" value="http://localhost/ipn_error.php"> 
        <input type="hidden" name="no_shipping" value="0"> 
        <input type="hidden" name="no_note" value="0"> 
        
        <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EABB5D" style="border-color:#000000; border-style:solid; border-width:1px;"> 
            <tr> 
                <td align="left" valign="top">
                    <span class="prod"><strong>Detalle de los Productos Seleccionados:</strong></span><br><br> 
                    <span class="prod"><strong>Productos:</strong> <?php echo htmlspecialchars($products); ?><br><br> 
                    <strong>Precio Total:</strong> $<?php echo number_format($costo, 2); ?> 
                    </span>
                </td> 
            </tr> 
        </table> 
        <br>
        <div style="text-align: center;">
            <input type="submit" name="Submit" value="Pagar en PayPal"> 
        </div>
    </fieldset> 
</form> 
 
</body> 
</html>