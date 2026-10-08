# Ejercicio 1
Indicar si los siguientes códigos son equivalentes.
```php
<?php
$a = array( 'color' => 'rojo',
'sabor' => 'dulce',
'forma' => 'redonda',
'nombre' => 'manzana',
4
);
?>
```

```php
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>
```

## Respuesta
El ejecutar ambos códigas analizando la estructura interna del array con la función `print_r()`, ambos tuvieron por salida:
```
Array
(
    [color] => rojo
    [sabor] => dulce
    [forma] => redonda
    [nombre] => manzana
    [0] => 4
)
```

Por lo que son equivalentes.