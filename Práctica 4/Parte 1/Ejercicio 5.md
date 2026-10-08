# Ejercicio 5
Analizar el siguiente ejemplo: Contador de visitas a una página web

**contador.php**
```php-template
<?
// Archivo para acumular el numero de visitas
$archivo = "contador.dat";
// Abrir el archivo para lectura
$abrir = fopen($archivo, "r");
// Leer el contenido del archivo
$cont = fread($abrir, filesize($archivo));
// Cerrar el archivo
fclose($abrir);
// Abrir nuevamente el archivo para escritura
$abrir = fopen($archivo, "w");
// Agregar 1 visita
$cont = $cont + 1;
// Guardar la modificación
$guardar = fwrite($abrir, $cont);
// Cerrar el archivo
fclose($abrir);
// Mostrar el total de visitas
echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
?>
```

**visitas.php**
```php-template
<!-- Página que va a contener al contador de visitas -->
<html>
<head></head>
<body>
<? include("contador.php")?>
</body>
</html>
```

En la misma carpeta, crear el archivo de texto contador.dat, con el valor inicial del contador y con permisos de lectura y escritura.
## Respuesta
El código implementa un contador de visitas persistente. Usa un archivo de texto plano para almacenar los datos (contador.dat), un archivo para el manejo de la lógica (contador.php), que luego es incluído en la página principal (visitas.php).

En el archivo de lógica:
1. Se define cúal es el archivo a usar.
2. El archivo es abierto en modo lectura.
3. Se almacena su contenido en la variable `$cont`.
4. El archivo es cerrado.
5. Se vuelve a abrir el archivo, esta vez en modo escritura, lo que borra su contenido anterior.
6. Se suma la nueva visita.
7. Se escribe el archivo.
8. Se cierra el archivo.
9. Se imprime en pantalla la nueva cantidad de visitas.

En el archivo `visitas.php`, simplemente se incluye el archivo `contador.php` para ejecutar su lógica y mostrar el resultado en HTML.