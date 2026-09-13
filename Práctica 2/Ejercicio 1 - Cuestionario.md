# Ejercicio 1 - Cuestionario

## 1. ¿Qué es CSS y para qué se usa?

CSS es un lenguaje que permite cambiar la presentación visual de un documento HTML: colores, tipografías, tamaños, márgenes, distribución de elementos, etc. Se usa para separar la estructura del contenido (HTML) de su presentación, permitiendo modificar el aspecto visual de un sitio sin tener que tocar el contenido.

## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Una regla CSS está compuesta por un selector y un bloque de declaraciones entre llaves. El selector indica a qué elemento o elementos del documento se les va a aplicar el estilo, y dentro de las llaves se escriben una o más declaraciones, cada una formada por una propiedad y un valor, separados por **:** y terminadas en **;**.

```css
selector {
  propiedad: valor;
  propiedad: valor;
}
```

Por ejemplo:

```css
p {
  color: red;
  font-size: 14px;
}
```

Esta regla selecciona todos los párrafos (p) y les aplica color rojo y tamaño de fuente 14px.

## 3. ¿Cuáles son las tres formas de dar estilo a un documento?

* **Estilo en línea (inline)**: Se aplica directamente sobre un elemento HTML mediante el atributo style. Tiene la mayor prioridad pero es poco práctico de mantener.

* **Estilo interno**: Se define dentro del documento HTML, en el head, usando el elemento style. Afecta solo a ese documento.

* **Estilo externo**: Se define en un archivo .css aparte, y se vincula al documento HTML mediante el elemento link. Es la forma recomendada porque permite reutilizar el mismo estilo en varios documentos.

## 4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

* **Selector de elemento (tipo)**: Selecciona todos los elementos de ese tipo. **Ejemplo**:
```css
p { color: black; }
```

* **Selector de clase**: Selecciona los elementos que tengan asignada esa clase mediante el atributo class. Se antepone un punto. **Ejemplo**: 
```css
.destacado { color: red; }
```

* **Selector de id**: Selecciona el elemento único que tenga ese id, mediante el atributo id. Se antepone un numeral. **Ejemplo**: 
```css
#titulo { font-size: 20px; }
```

* **Selector universal**: Selecciona todos los elementos del documento. Se representa con un asterisco. **Ejemplo**: 
```css
* { margin: 0; }
```

* **Selector descendiente**: Selecciona un elemento que esté dentro de otro, sin importar el nivel de anidamiento. **Ejemplo**: (Selecciona los p que estén dentro de un div).
```css
div p { color: blue; }
```

* **Selector de atributo**: Selecciona elementos que tengan un atributo específico. **Ejemplo**: 
```css
a[target] { color: green; }
```

## 5. ¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?

Una pseudo-clase es un selector que permite aplicar un estilo a un elemento según un estado particular en el que se encuentra, que no depende directamente de su estructura o atributos en el HTML, sino de su condición dinámica (por ejemplo, si fue visitado, si el mouse está sobre él, etc.). Se escribe con dos puntos después del selector.

Las pseudo-clases más utilizadas aplicadas a vínculos (a) son:
* **a:link**: Enlace no visitado.
* **a:visited**: Enlace ya visitado.
* **a:hover**: Enlace cuando el mouse pasa por encima.
* **a:active**: Enlace en el momento en que se hace clic sobre él.

## 6. ¿Qué es la herencia?

La herencia es el mecanismo por el cual algunas propiedades CSS aplicadas a un elemento se transmiten automáticamente a sus elementos descendientes, sin necesidad de declararlas nuevamente. Por ejemplo, si se define color o font-family en el body, todos los elementos hijos (párrafos, títulos, listas, etc.) heredan ese valor salvo que se les especifique otro distinto. No todas las propiedades son heredables. Por ejemplo, propiedades relacionadas al layout como border o margin no se heredan.

## 7. ¿En qué consiste el proceso denominado cascada?

La cascada es el mecanismo que utiliza CSS para resolver conflictos cuando varias reglas distintas aplican al mismo elemento con la misma propiedad. Determina qué regla finalmente se aplica, en base a tres factores principales:

* **Origen**: De dónde viene la regla (estilo del navegador, del usuario o del autor del documento).
* **Especificidad**: Cuán específico es el selector (un id pesa más que una clase, y una clase pesa más que un selector de elemento).
* **Orden de aparición**: Si dos reglas tienen la misma especificidad, gana la que fue declarada más tarde en el documento.