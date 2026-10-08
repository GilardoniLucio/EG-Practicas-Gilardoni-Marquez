# Ejercicio 3
**Explicar para qué se utiliza el siguiente código.**

## a)

```php-template
<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
echo "<tr>";
for ($c = 1; $c <= $col;$c++) {
echo "<td>&nbsp;</td>\n";
} echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>
```
### Respuesta
El código se utiliza para construir una tabla vacía de cinco filas y dos columnas, que ocupa el 90% del ancho de la vista.


## b)

```php-template
<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Edad: <input name="age" size="2">
<input type="submit" name="submit" value="Ir">
</form>
<?php
}
else {
$age = $_POST['age'];
if ($age >= 21) {
echo 'Mayor de edad';
}
else {
echo 'Menor de edad';
}
}
?>
</body></html>
```
### Respuesta
El código presenta un formulario para determinar si el usuario es mayor de edad, considerando como tal a aquellos que tengan una edad mayor o igual a 21 años. Inicialmente se verifica si se envió el formulario mediante ` if (!isset($_POST['submit']))`. 
- Si el formulario aún no fue enviado, muestra un input con la leyenda 'Edad:' y un botón 'Ir'. Cuando el usuario completa el campo y presiona *Ir*, se ejecuta el resto del código.
- Una vez el usuario presiona *Ir*, ` if (!isset($_POST['submit']))` es falso y se guarda el valor de *$_POST['submit']* en *age*. Luego:
     - Si el valor de *age* es mayor o igual a 21, muestra 'Mayor de edad'
     - En caso contrario, muestra 'Menor de edad'. Esto también ocurre si el usuario deja el formulario vacío.

