# Ejercicio 4
Si el archivo *datos.php* contiene el código que sigue:

```php-template
<?php
$color='blanco';
$flor='clavel'
?>
```

Indicar las salidas que produce el siguiente código. Justificar.

```php-template
<?php
echo "El $flor $color \n";
include 'datos.php';
echo "El $flor $color";
?>
```
## Respuesta
La salida que produce el código es:
```
El
El clavel blanco
```
La línea `echo "El $flor $color \n";` referencia dos variables no definidas, ya que el *include* se encuentra en la línea siguiente. Por este motivo, la salida de esta línea es "El " (incluyendo el fin de línea).

En la siguiente línea, `include 'datos.php'`
hace que el archivo actual pueda acceder a las variables definidas `$flor` y `$color`. Por este motivo, la salida de la línea siguiente es "El clavel blanco".