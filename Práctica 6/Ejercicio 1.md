# Ejercicio 1: Completar

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:
**`mysqli_connect()`**

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: 
**El nombre del servidor (host), el nombre de usuario y la contraseña.**

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función:
**`mysqli_select_db()`**

Esta función debe pasar como parámetro:
**La variable que contiene la conexión activa y el nombre de la base de datos a seleccionar.** *(Ej: `mysqli_select_db($conexion, "mi_base");`)*

La función `mysqli_query()` se utiliza para:
**Ejecutar una consulta (instrucción SQL) en la base de datos activa.**

y requiere como parámetros:
**La variable de la conexión activa y la cadena de texto con la consulta SQL.** *(Ej: `mysqli_query($conexion, "SELECT * FROM tabla");`)*

La cláusula `or die()` se utiliza para:
**Detener abruptamente la ejecución del script PHP si la instrucción anterior falla, permitiendo mostrar un mensaje de error personalizado por pantalla.**

y la función `mysqli_error()` se puede usar para:
**Obtener y mostrar la descripción exacta (en formato de texto) del último error que MySQL haya devuelto, lo cual es muy útil para depurar el código.**

---

Si la función `mysqli_query()` es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo `$vResult`, y a continuación se puede ejecutar el siguiente código (explicarlo):

```php
<?php
while ($fila = mysqli_fetch_array($vResultado)) 
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr> 
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?> 
```

El bloque de código sirve para recorrer y mostrar dinámicamente los resultados de una consulta SQL dentro de una tabla HTML. 

1. **`while ($fila = mysqli_fetch_array($vResultado))`**: Inicia un bucle que se repetirá tantas veces como filas haya devuelto la consulta. En cada vuelta, toma una fila de `$vResultado`, la convierte en un array numérico y/o asociativo, y la guarda en la variable `$fila`.
2. **Dentro del bucle (Mezcla PHP/HTML)**: Cierra momentáneamente PHP (`?>`) para escribir código HTM. Genera una fila de tabla (`<tr>`) y, usando pequeños bloques de `<?php echo ... ?>`, imprime en cada celda (`<td>`) el valor de la columna 0, la columna 1 y la columna 2 de la base de datos de esa fila en particular.
3. Luego imprime otra fila con una celda expandida (`<td colspan="5">`), vuelve a abrir PHP (`<?php`) y cierra la llave `}` del `while`.
4. Una vez que termina el bucle (es decir, ya se dibujó toda la tabla con los datos), utiliza `mysqli_free_result($vResultado)` para liberar la memoria del servidor que ocupaban esos resultados, y finalmente `mysqli_close($link)` para cerrar la conexión con la base de datos.