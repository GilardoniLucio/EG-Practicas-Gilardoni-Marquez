# Ejercicio 4

## Analizar los siguientes códigos y comparar sus efectos. Explicar.

```css
* {color:green; }
a:link {color:gray }
a:visited{color:blue }
a:hover {color:fuchsia }
a:active {color:red }
p {font-family: arial,helvetica;font-size: 10px;color:black; }
.contenido{font-size: 14px;font-weight: bold; }
```
### CSS
*   `* {color:green; }`: **Selector universal.** Todo el texto de la página será verde por defecto, a menos que otra regla más específica indique lo contrario.
*   `a:link`, `a:visited`, `a:hover`, `a:active`: Pseudoclases de enlaces. Definen los colores del link según su estado: gris (sin visitar), azul (visitado), fucsia (al pasar el mouse) y rojo (al hacer clic).
*   `p {font-family: arial,helvetica; font-size: 10px; color:black; }`: Todos los párrafos serán Arial/Helvetica, negros y pequeños (10px).
*   `.contenido{font-size: 14px; font-weight: bold; }`: Todo elemento con esta clase tendrá texto de 14px y en negrita.


### Cuadro izquierdo

```html
<body>
<p class="contenido" style="font-weight: normal;">
Este es un texto ...............</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con un
enlace</a></td>
</tr>
</table>
</body>
```
*   **Párrafo (`<p>`):** Toma el color negro y la fuente Arial por la regla `p`. Toma el tamaño de 14px por la clase `.contenido`. Aunque la clase `.contenido` le da negrita (`bold`), el atributo en línea `style="font-weight: normal;"` tiene mayor prioridad. 
    *   **Efecto visual:** Letra negra, Arial, tamaño 14px, **sin negrita** (peso normal).
*   **Tabla:** No tiene ninguna regla específica.
    *   **Efecto visual:** Adquiere el color verde por el selector universal `*` y mantiene el tamaño y peso de fuente por defecto del navegador.

### Cuadro derecho

```html
<body class="contenido">
<p> Este es un texto................</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con
un enlace</a></td>
</tr>
</table>
</body>
```
*   **`<body>`:** Al aplicarle la clase `.contenido` al body, todo el documento hereda el tamaño de 14px y la negrita (`bold`), a menos que una etiqueta hija lo pise.
*   **Párrafo (`<p>`):** La regla específica de `p` sobreescribe el tamaño heredado, bajándolo a 10px, y le da color negro y fuente Arial. Sin embargo, como la regla de `p` no especifica el peso de la fuente (`font-weight`), hereda la negrita del body.
    *   **Efecto visual:** Letra negra, Arial, tamaño 10px, **en negrita**.
*   **Tabla:** No tiene regla específica para modificar el texto.
    *   **Efecto visual:** Toma el color verde del selector universal `*`, pero **hereda el tamaño 14px y la negrita** del `<body>`.


### Comparación
La gran diferencia radica en el uso de la **Herencia**, la **Especificidad** (estilos en línea) y el proceso en **Cascada**:

1.  **En el párrafo:** 
    *   En el código 1 se ve grande (14px) y normal (porque el estilo en línea `style` anula la negrita de la clase).
    *   En el código 2 se ve chico (10px) y en negrita (porque la regla `p` le pisa el tamaño al body, pero hereda la negrita de él).
2.  **En la tabla y el enlace:** 
    *   En el código 1 se ven con texto de tamaño y grosor normal.
    *   En el código 2 se ven más grandes (14px) y en negrita, ya que heredan las propiedades de la clase `.contenido` aplicada a todo el `<body>`. En ambos casos, el texto de la tabla será verde gracias al selector universal `*`.