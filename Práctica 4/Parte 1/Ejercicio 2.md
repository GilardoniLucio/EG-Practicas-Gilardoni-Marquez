## Ejercicio 2
**Indicar si los siguientes códigos son equivalentes.**

### a)

```php
// 1
<?php
$i = 1;
while ($i <= 10) {
    print $i++; 
}
?>

// 2
<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>

// 3
<?php
$i = 0;
do {
    print ++$i;
} while ($i<10);
?>
```
Si son equivalentes. Los tres bloques imprimen los números del 1 al 10.
*   El primero es un ciclo `while` con post-incremento.
*   El segundo hace lo mismo usando la sintaxis alternativa de PHP (`while: ... endwhile;`).
*   El tercero usa un `do-while`, iniciando en 0 pero utilizando un pre-incremento (`++$i`). Esto hace que el primer valor impreso sea 1, cortando cuando `$i` deja de ser menor a 10 (imprimiendo el 10 como último valor).

---

### b)

```php
// 1
<?php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>

// 2
<?php
for ($i = 1; ;$i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
?>

// 3
<?php
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
?>

// 4
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>
```
Si son lógicamente equivalentes. Las cuatro opciones son distintas formas de usar el ciclo `for` para imprimir de corrido los números del 1 al 10 (`12345678910`).
*   El primer caso es la sintaxis normal.
*   En el segundo y tercer caso se omiten parámetros en la declaración del `for` (la condición y/o el incremento). Esto se compensa manejándolos manualmente dentro del bloque mediante un `if` y un `break` para salir.
*   En el cuarto caso se utiliza una instrucción vacía (por el `;` final). Toda la acción ocurre en la zona de incremento del `for`, PHP primero evalúa la expresión de la izquierda (`print $i`) y luego ejecuta el incremento a la derecha (`$i++`), logrando el mismo resultado en una sola línea.

---

### c)

```php
// 1
<?php
…
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
?>

// 2
<?php
…
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
?>
```
Si son equivalentes. Ambos fragmentos evalúan el valor de la variable `$i` y tienen la misma salida. El primer bloque utiliza una cadena de condicionales `if / elseif`, mientras que el segundo utiliza una estructura `switch`.