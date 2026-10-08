<html>
<head></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
Nombre de usuario: <input name="nombre_usuario">
<input type="submit" name="submit" value="Probar">
</form>
<p><?php
include("ejercicio4.php"); 
if(isset($_POST['nombre_usuario']))
$resultado = comprobar_nombre_usuario($_POST['nombre_usuario']);
echo $resultado;
?></p>
</body>
</html>