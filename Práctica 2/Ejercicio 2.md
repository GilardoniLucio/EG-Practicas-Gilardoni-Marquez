# Ejercicio 2

## Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.
```css
p#normal {
font-family: arial,helvetica;
font-size: 11px;
font-weight: bold;
}
*#destacado {
border-style: solid;
border-color: blue;
border-width: 2px;
}
#distinto {
background-color: #9EC7EB;
color: red;
}
```
```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>
```

### CSS

**Regla 1: `p#normal`**
*   **Selector:** Se aplica a cualquier etiqueta de párrafo (`<p>`) que tenga el atributo `id="normal"`.
*   **Declaraciones:**
    *   `font-family: arial,helvetica;`: Define la tipografía. Intentará usar Arial; si la computadora no la tiene, usará Helvetica.
    *   `font-size: 11px;`: Define el tamaño de la letra en 11 píxeles.
    *   `font-weight: bold;`: Aplica negrita al texto.

**Regla 2: `*#destacado`**
*   **Selector:** Se aplica a cualquier etiqueta HTML (por el `*`) que tenga el atributo `id="destacado"`.
*   **Declaraciones:**
    *   `border-style: solid;`: Crea un borde de línea continua.
    *   `border-color: blue;`: Pinta el borde de color azul.
    *   `border-width: 2px;`: Le da al borde un grosor de 2 píxeles.

**Regla 3: `#distinto`**
*   **Selector:** Se aplica a cualquier etiqueta que tenga el atributo `id="distinto"`. (Funciona igual que el anterior).
*   **Declaraciones:**
    *   `background-color: #9EC7EB;`: Pinta el fondo del elemento de un color celeste.
    *   `color: red;`: Pinta el texto del elemento de color rojo.


### 2. HTML

**Elemento 1: `<p id="normal">Este es un párrafo</p>`**
*   **Aplicación:** Cumple con la Regla 1 (es una etiqueta `<p>` con `id="normal"`).
*   **Efecto:** El texto "Este es un párrafo" se verá en letra Arial (o Helvetica), tamaño 11px y en **negrita**.

**Elemento 2: `<p id="destacado">Este es otro párrafo</p>`**
*   **Aplicación:** Cumple con la Regla 2 (cualquier etiqueta con `id="destacado"`).
*   **Efecto:** El texto "Este es otro párrafo" tendrá un recuadro alrededor. El recuadro será una línea continua, de color azul y de 2 píxeles de grosor. El texto mantendrá su estilo por defecto.

**Elemento 3: `<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>`**
*   **Aplicación:** También cumple con la Regla 2 (gracias al `*`, la regla aplica a una tabla y no solo a párrafos).
*   **Efecto:** Toda la tabla (que contiene el texto "Esta es una tabla") estará encerrada en un recuadro continuo, azul y de 2 píxeles de grosor.

**Elemento 4: `<p id="distinto">Este es el último párrafo</p>`**
*   **Aplicación:** Cumple con la Regla 3 (tiene el `id="distinto"`).
*   **Efecto:** Este párrafo se verá con un fondo de color celeste claro (`#9EC7EB`) y las letras de la frase "Este es el último párrafo" serán de color rojo.