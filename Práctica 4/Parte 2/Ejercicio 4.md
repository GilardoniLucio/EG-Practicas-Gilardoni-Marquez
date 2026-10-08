# Ejercicio 4
Analizar la siguiente función, y escribir un script para probar su funcionamiento:

```php
function comprobar_nombre_usuario($nombre_usuario){
//compruebo que el tamaño del string sea válido.
if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
echo $nombre_usuario . " no es válido<br>";
return false;
}
//compruebo que los caracteres sean los permitidos
$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
for ($i=0; $i<strlen($nombre_usuario); $i++){
if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
echo $nombre_usuario . " no es válido<br>";
return false;
}
}
echo $nombre_usuario . " es válido<br>";
return true;
}
```

## Respuesta
Esta función toma un parámetro, que se espera que sea de tipo `string`.
Comprueba que tenga más de 3 caracteres, pero no más de 19. Si no satisface esta condición, muestra un mensaje notificando al usuario y devuelve `false`.
Si pasa esta verificación, luego se comprueba que todos sus caracteres estén dentro de la lista de caracteres aceptados. Si alguno de ellos no está en la lista, se muestra un mensaje notificando al usuario y devuelve `false`.
Pasadas estas verificaciones, se emite un mensaje de exíto y devuelve `true`.

## Script
Habiendo copiado el código del enunciado a un archivo `ejercicio4.php` en la misma carpeta, el script queda:
```php-template
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
```