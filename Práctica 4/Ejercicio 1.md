# Ejercicio 1
En el siguiente código identificar: variables y su tipo, operadores, funciones y sus parámetros, estructuras de control y cuál es la salida por pantalla.

### Variables y su tipo
*   `$i`: Entero (integer). Es el parámetro de la función `doble`.
*   `$a`: Booleano (boolean). Almacena `TRUE`.
*   `$b`: Cadena de texto (string). Almacena `"xyz"`.
*   `$c`: Cadena de texto (string). Almacena `'xyz'`.
*   `$d`: Entero (integer). Inicia en `12` y luego cambia de valor a lo largo del script.
*   `$f`: Entero (integer). Almacena el resultado devuelto por la función.
*   `$g`: Entero (integer ). Almacena el resultado de una suma.

### Operadores
*   **Aritméticos:** `*` (Multiplicación).
*   **De asignación:** `=` (Asignación básica), `+=` (Suma y asignación combinada).
*   **De incremento:** `++$d` (Suma antes de evaluar), `$d++` (Suma después de evaluar).
*   **Ternario (Condicional):** `? :` (Evalúa una condición y devuelve un valor si es verdadera o falsa).

### Funciones y sus parámetros
*   **Definidas por el usuario:** 
    *   `doble($i)`: Recibe el parámetro `$i`.
*   **Internas de PHP:** 
    *   `gettype()`: Recibe una variable para evaluar su tipo (usada con `$a`, `$b`, `$c`, `$d`).
    *   `is_int()`: Recibe `$d` para evaluar si es de tipo entero.
    *   `is_string()`: Recibe `$a` para evaluar si es cadena de texto.

### Estructuras de control
*   **Condicional `if`**: Se utiliza dos veces para evaluar condiciones simples (`if (is_int($d))` y `if (is_string($a))`).

### Salida

La salida exacta que producirá el código es la concatenación de los `gettype` seguida de los valores de las variables en el `echo` final:

```text
booleanstringstringinteger
1xyzxyz184444
```