# Ejercicio 2
En cada caso, indicar las salidas correspondientes
## a)
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```
### Respuesta
La salida del programa es "bar1". Al atributo `x` de `$matriz` se le asigna `"bar"`; y al atributo `12`, `true`, que al imprimirse se representa como un `1`.

## b)
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
### Respuesta
`$matriz` es una variable de tipo *Array*, que en su atributo `"unamatriz"`contiene un Array con atributos `6` (se le asigna `5`), `13` (se le asigna `9`), y `"a"` (se le asigna `42`).
Por lo tanto la salida es `5942` (no hay saltos de línea).

## c)
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>
```
### Respuesta
`$matriz` empieza como un array con tributos `5`, de valor `1`, y `12`, de valor 2. Luego, la línea `$matriz[] = 56;` guarda `56` en el atributo `13` de la variable. A continuación su atributo `"x"` toma el valor `42`.
La función `unset()` se utiliza para liberar variables. Primero se libera el atributo `5` de `$matriz` y luego se libera toda la variable.
Al no haber líneas con `echo`, el programa no tiene salida.