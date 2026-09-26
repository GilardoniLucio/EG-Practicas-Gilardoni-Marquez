# Ejercicio 3

## Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
p.quitar {
color: red;
}
*.desarrollo {
font-size: 8px;
}
.importante {
font-size: 20px;
}
```

```html
<p class="desarrollo">
En este primer párrafo trataremos lo siguiente:
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
Este párrafo debe ser quitado de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p >
En este otro párrafo trataremos otro tema:<br />
xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
Y este es el párrafo más importante de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</ p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

### 1. CSS

**Regla 1: `p.quitar`**
*   **Selector:** Se aplica a cualquier etiqueta de párrafo (`<p>`) que tenga el atributo `class="quitar"`.
*   **Declaraciones:**
    *   `color: red;`: Pinta el texto del elemento de color rojo.

**Regla 2: `*.desarrollo`**
*   **Selector:** Se aplica a cualquier etiqueta HTML (por el `*`) que tenga el atributo `class="desarrollo"`.
*   **Declaraciones:**
    *   `font-size: 8px;`: Define el tamaño de la letra en 8 píxeles (muy pequeña).

**Regla 3: `.importante`**
*   **Selector:** Se aplica a cualquier etiqueta que tenga el atributo `class="importante"`. (Funciona igual que la regla anterior).
*   **Declaraciones:**
    *   `font-size: 20px;`: Define el tamaño de la letra en 20 píxeles (grande).


### 2. HTML

**Elemento 1: `<p class="desarrollo">...`**
*   **Aplicación:** Cumple con la Regla 2 (es una etiqueta con `class="desarrollo"`).
*   **Efecto:** Todo el texto de este párrafo se verá muy pequeño, con un tamaño de fuente de 8px.

**Elemento 2: `<p class="quitar">...`**
*   **Aplicación:** Cumple con la Regla 1 (es una etiqueta `<p>` con `class="quitar"`).
*   **Efecto:** El texto de este párrafo se verá de color rojo.

**Elemento 3: `<p >...`**
*   **Aplicación:** No tiene ninguna clase asignada, por lo tanto, no se le aplica ninguna de las reglas CSS.
*   **Efecto:** El texto se verá con el estilo predeterminado del navegador.

**Elemento 4: `<p class="importante">...`**
*   **Aplicación:** Cumple con la Regla 3 (tiene la `class="importante"`).
*   **Efecto:** El texto de este párrafo se verá más grande que el texto normal, con un tamaño de fuente de 20px.

**Elemento 5: `<h1 class="quitar">...`**
*   **Aplicación:** Intenta usar la clase `quitar`, pero la Regla 1 (`p.quitar`) exige estrictamente que la etiqueta sea un `<p>`. Al ser un encabezado `<h1>`, no cumple con la regla.
*   **Efecto:** No se aplicará el color rojo. El texto mantendrá el formato por defecto de un `<h1>`.

**Elemento 6: `<p class="quitar importante">...`**
*   **Aplicación:** Cumple con la Regla 1 (`p.quitar`) y con la Regla 3 (`.importante`) de manera simultánea, ya que los elementos HTML pueden tener múltiples clases separadas por espacios.
*   **Efecto:** Los estilos se combinan. El texto de este párrafo se verá de color rojo (por la clase `quitar`) y con un tamaño de letra de 20px (por la clase `importante`).