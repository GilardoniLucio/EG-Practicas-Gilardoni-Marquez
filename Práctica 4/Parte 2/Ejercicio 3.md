# Ejercicio 3
En cada caso, indicar las salidas correspondientes:
## a)
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```

### Respuesta
La salida es el año, mes, día, hora, minutos y segundos del momento en que se ejecutó el programa, con cierto formato. Ejemplo: `Has entrado en esta pagina a las 4 horas, con 1 minutos y 20 segundos, del 8/10/2026`

## b)
```php
<?php
function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
### Respuesta
La función sumar muestra los dos sumandos obtenidos por parámetro y el resultado de dicha suma, con cierto formato. En particular, `5+6=11`.