# Ejercicio 3

### **3.a)**

```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
<a href="#">Click aquí para ir a Google</a>
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>
```

- Enlace 1: Enlace normal, se abre en la misma ventana/pestaña.
- Enlace 2: Mmismo enlace pero con **target="_blank"**, se abre en una ventana o pestaña nueva.
- Enlace 3: Agrega atributos que describen el recurso destino (**type**, **hreflang**, **charset**, **rel**) pero no cambian el comportamiento visual respecto al primero.
- Enlace 4: **href="#"** no lleva a ningún lado, apunta al inicio de la misma página.
- Enlace 5: **href="#arriba"** es un enlace interno que apunta al elemento con **id="arriba"** dentro de la misma página.
- Último elemento: No es un enlace sino un **ancla de destino** (**name/id="arriba"**), es el punto al que apunta el enlace anterior.

### **3.b)**

```html
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>
```

- Caso 1: La imagen se muestra sola, no es clickeable. Solo el texto "Click aquí" es enlace.
- Caso 2: La imagen es clickeable (está dentro del **a**), pero el texto "Click aquí" queda fuera y no lo es.
- Caso 3: La imagen y el texto están dentro del mismo **a**, ambos son clickeables porque forman un único enlace.
- Caso 4: La imagen y el texto son dos enlaces separados (dos **a** distintos), ambos clickeables, apuntando al mismo destino.

### **3.c)**

```html
<ul>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ul>

<ol>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ol>

<ol>
<li>xxx</li>
</ol>
<ol>
<li value="2">yyy</li>
</ol>
<ol>
<li value="3">zzz</li>
</ol>

<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>
```

- **ul**: Lista no ordenada, se muestra con viñetas.
- **ol**: Lista ordenada, se muestra con números 1, 2, 3 automáticos.
- Tres **ol** separados: cada uno reinicia la numeración por su cuenta. El atributo **value** fuerza el número que se muestra en cada ítem (2 y 3), logrando visualmente la misma secuencia 1, 2, 3 pero armada con listas independientes.
- **blockquote**: No es una lista real, es un bloque de cita con un párrafo de texto plano donde los números se escriben a mano y las líneas se separan con **br**.

### **3.d)**

```html
<table border="1" width="300">
<tr>
<th>Columna 1</th>
<th>Columna 2</th>
</tr>
...
</table>

<table border="1" width="300">
<tr>
<td><div align="center"><strong>Columna1</strong></div></td>
<td><div align="center"><strong>Columna 2</strong></div></td>
</tr>
...
</table>
```

- Primera tabla: Usa **th** para los encabezados, el navegador los centra y pone en negrita por defecto, y además tienen semántica de encabezado de tabla (importante para accesibilidad).
- Segunda tabla: Usa **td** con **div align="center"** y **strong**, se ve igual visualmente (centrado y negrita) pero pierde la semántica de encabezado, perjudicando la accesibilidad.

### **3.e)**

```html
<table width="200">
<caption>Título</caption>
<tr>...</tr>
</table>

<table width="200">
<tr>
<td colspan="3"><div align="center">Título</div></td>
</tr>
<tr>...</tr>
</table>
```

- Primera tabla: Usa el elemento **caption** correctamente, HTML lo posiciona automáticamente como título de la tabla.
- Segunda tabla: No usa **caption**, simula el título con una fila y una celda **colspan="3"** que ocupa todo el ancho, pero sin la semántica real de título de tabla.

### **3.f)**

```html
<table width="200">
<tr><td colspan="3">...Título...</td></tr>
<tr>
<td rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>

<table width="200">
<tr><td colspan="3">...Título...</td></tr>
<tr>
<td colspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
```

- Primera tabla: Usa **rowspan="2"** para que la celda de la izquierda ocupe dos filas verticalmente.
- Segunda tabla: Usa **colspan="2"** en la segunda fila para fusionar dos celdas horizontalmente, dando una disposición distinta (fusión horizontal en una sola fila).

### **3.g)**

```html
<table width="200" border="1">...</table>
<table width="200" border="1" cellpadding="0" cellspacing="0">...</table>
```

Ambas tablas tienen la misma estructura de celdas fusionadas (**colspan** + **rowspan** combinados). La diferencia es que la segunda agrega **cellpadding="0"** y **cellspacing="0"**, eliminando el espacio interno de las celdas y el espacio entre celdas, quedando una tabla más compacta.

### **3.h)**

```html
<form id="form1" action="procesar.php" method="post" target="_blank">...</form>
<form id="form2" action="" method="get" target="_blank">...</form>
<form id="form3" action="mailto:xx@xx.com" enctype="text/plain" method="post" target="_blank">...</form>
```

- **form1**: Envía a **procesar.php** con **method="post"** (datos ocultos en el cuerpo de la petición), respuesta en pestaña nueva, campos con valor predefinido "xxx", agrupados con **fieldset/legend**, botón **type="submit"** que envía el formulario.
- **form2**: **action=""** envía a la misma página, **method="get"** (los datos quedan visibles en la URL), sin **fieldset/legend** (solo texto plano "LOGIN"), y el campo clave es **type="text"**, por lo que no oculta el valor ingresado.
- **form3**: **action="mailto:..."** envía los datos por correo electrónico, con **enctype="text/plain"** (texto plano sin codificar), agrupado con **fieldset/legend**, campo clave es **password**, pero el botón es **type="reset"** con value "Enviar" por lo que borra el formulario en vez de enviarlo.

### **3.i)**

```html
<label>Botón 1
<button type="button" name="boton1"><img src="logo.jpg" alt="Botón con imagen" width="30" height="20" /><br /><b>CLICK AQUÍ</b></button></label>

<label>Botón 2
<input type="button" name="boton2" value="CLICK AQUÍ" /></label>
```

- Botón 1: Usa **button type="button"**, que tiene contenido dentro (una imagen y texto en negrita).
- Botón 2: Usa **input type="button" value="..."**, solo muestra texto plano definido por el atributo **value**.

### **3.j)**

```html
<input type="radio" name="opcion" id="X" value="X" />
<input type="radio" name="opcion" id="Y" value="Y" />

<input type="radio" name="opcion1" id="X" value="X" />
<input type="radio" name="opcion2" id="Y" value="Y" />
```

- Primer caso: Ambos radios comparten **name="opcion"**, forman un mismo grupo y son mutuamente excluyentes (solo se puede elegir uno).
- Segundo caso: Cada radio tiene un **name** distinto (opcion1, opcion2), no forman grupo, por lo que se pueden marcar los dos al mismo tiempo.

### **3.k)**

```html
<select name="lista">...</select>
<select name="lista[]" multiple="multiple">...</select>
```

- Primer **select**: Sin **multiple**, permite elegir una sola opción a la vez (lista desplegable simple).
- Segundo **select**: Con **multiple="multiple"**, permite seleccionar varias opciones a la vez (se muestra como lista con scroll); el **name="lista[]"** indica que los valores seleccionados se enviarán como un array al servidor.