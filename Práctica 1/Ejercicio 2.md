# Ejercicio 2

### **2.a)** `<!-- Código controlado el día 12/08/2009 -->`

Es un comentario en HTML por lo que puede colocarse en cualquier parte del documento. No se visualiza en el navegador, solo sirve como anotación para quien programa y n tiene atributos.

### **2.b)** `<div id="bloque1">Contenido del bloque1</div>`

Va en el body. El elemento **div** agrupa contenido en un bloque genérico, sin un efecto visual propio excepto que se le aplique algún estilo. El atributo **id="bloque1"** es el identificador único del elemento, opcional. Sirve para poder referenciar este div en scripts o css.

### **2.c)** `<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />`

Va en el body. Es un elemento vacío (no tiene source asignado) **img** que inserta y muestra una imagen.

- **src**: Ruta de la imagen, obligatorio.
- **alt**: Texto alternativo, opcional pero recomendado por accesibilidad.
- **id="im1"**: Identificador único, opcional.
- **name="im1"**: Nombre del elemento, opcional.
- **width / height**: Dimensiones en píxeles, opcionales.
- **longdesc**: Enlace a una descripción extendida de la imagen, opcional.

### **2.d)**

```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler" />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

Van en el head, no producen algún efecto visual.

- Primera parte: Define palabras clave para buscadores. **name="keywords"** y **content="..."** son obligatorios juntos y **lang="es"** (idioma del contenido) es opcional.
- Segunda parte: Indica fecha de expiración del documento para el caché del navegador.**http-equiv="expires"** y **content="..."** son obligatorios juntos.

### **2.e)** `<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML</a>`

Va en el body. El elemento **a** crea un hipervínculo.

- **href**: Destino del enlace, obligatorio.
- **type="text/html"**: Tipo MIME del recurso destino (Cadena que identifica el formato de un archivo o contenido), opcional.
- **hreflang="es"**: Idioma del recurso destino, opcional.
- **charset="utf-8"**: Codificación de caracteres del recurso destino, opcional.
- **rel="help"**: Relación entre el documento actual y el recurso enlazado, opcional.

### **2.f)** 
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
    <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

Es una tabla con **table**, **caption**, **tr**, **th** y **td**. Va en el body, muestra datos organizados en filas y columnas.

- **width="200"** en **table**: Ancho de la tabla, opcional.
- **summary="..."** en **table**: Descripción para lectores de pantalla, opcional.
- **align="top"** en **caption**: Posición del título, opcional.
- **scope="col" / scope="row"** en **th**: Indica si el encabezado aplica a la columna o a la fila, opcional pero recomendado por accesibilidad.