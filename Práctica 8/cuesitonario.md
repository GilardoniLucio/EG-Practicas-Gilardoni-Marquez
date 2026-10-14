# PRÁCTICA N° 8: Accesibilidad y Usabilidad, Internacionalización, Independencia de Dispositivos

**1. Qué es la Accesibilidad Web?**

La Accesibilidad Web es el conjunto de técnicas, pautas y estándares de diseño y programación orientados a garantizar que un sitio web pueda ser utilizado y comprendido por la mayor cantidad de personas posible, incluyendo a aquellas que tienen algún tipo de discapacidad física, cognitiva, visual, auditiva o motriz.

**2. Qué es la WAI?**

La WAI (Web Accessibility Initiative) es un grupo de trabajo creado por el W3C (World Wide Web Consortium) que se dedica exclusivamente a desarrollar pautas, estrategias y recursos para promover y estandarizar la accesibilidad en la web a nivel mundial.

**3. Cuáles son los Componentes esenciales de Accesibilidad Web?**

Para que la web sea accesible, interactúan varios componentes que deben estar alineados:
* Contenido Web (texto, imágenes, código multimedia).
* Agentes de usuario (navegadores web, reproductores multimedia).
* Tecnologías de asistencia (lectores de pantalla, teclados alternativos, magnificadores).
* Usuarios (con sus conocimientos y experiencias).
* Desarrolladores y diseñadores.
* Herramientas de autor (software para crear sitios web, CMS).
* Herramientas de evaluación (software para validar accesibilidad).

**4. Qué son las Pautas de Accesibilidad al Contenido en la Web (WCAG)?**

Las WCAG (Web Content Accessibility Guidelines) son el documento técnico estándar internacional publicado por la WAI. Este documento detalla una serie de reglas, principios y criterios de éxito técnicos sobre cómo hacer que el contenido web sea accesible para las personas con discapacidad.

**5. Cuáles son los niveles de prioridad establecidos por las pautas?**

Históricamente, las pautas clasificaban sus puntos de control en tres prioridades:
* Prioridad 1: Puntos que un desarrollador web **tiene** que cumplir obligatoriamente, de lo contrario ciertos grupos de usuarios no podrán acceder a la información.
* Prioridad 2: Puntos que un desarrollador **debería** cumplir para eliminar barreras significativas de acceso.
* Prioridad 3: Puntos que un desarrollador **puede** cumplir para mejorar aún más la experiencia de todos los usuarios.

**6. Cuáles son los niveles de conformidad?**

Ligados a las prioridades anteriores, los niveles de certificación o conformidad que un sitio web puede alcanzar son:
* Nivel A: Se cumplen todos los puntos de control de Prioridad 1.
* Nivel AA: Se cumplen todos los puntos de control de Prioridad 1 y 2.
* Nivel AAA: Se cumplen todos los puntos de control de Prioridad 1, 2 y 3.

**7. Qué es TAW?**

El TAW (Test de Accesibilidad Web) es una herramienta de software que sirve para analizar de forma automática sitios web y comprobar su grado de cumplimiento de las pautas de accesibilidad estandarizadas por las WCAG, indicando errores técnicos a corregir.

**8. En qué consiste la Usabilidad Web?**

La usabilidad web es la medida de la calidad de la experiencia que tiene un usuario cuando interactúa con un sistema o sitio web. Consiste en diseñar interfaces orientadas a que el usuario pueda navegar, aprender a usar el sistema y cumplir sus objetivos de manera fácil, eficiente, intuitiva y satisfactoria.

**9. A qué se refieren los conceptos de buscabilidad y visibilidad de un sitio web?**

* Buscabilidad: Se refiere a la facilidad con la que un usuario puede encontrar información específica dentro del propio sitio web, gracias a una buena arquitectura de la información, menús claros o un buscador interno.
* Visibilidad: Se refiere a la facilidad con la que el sitio web en general puede ser encontrado desde afuera a través de motores de búsqueda de internet (como Google), estando fuertemente ligado a las técnicas de SEO.

**10. A qué se refiere el concepto de fidelidad en relación a un sitio web?**

La fidelidad se refiere a la capacidad que tiene el sitio web para generar confianza y satisfacción en el usuario, logrando retenerlo para que vuelva a utilizar o visitar la plataforma recurrentemente en el futuro.

**11. Qué técnicas se utilizan para evaluar la usabilidad de un sistema?**

Las dos metodologías principales son:
* Test Heurístico: Evaluación realizada por un grupo de expertos que analizan la interfaz basándose en principios o reglas generales de usabilidad predefinidas (como las heurísticas de Nielsen).
* Test de Usuario: Evaluación realizada observando a usuarios finales reales (representativos de la audiencia) mientras intentan completar tareas específicas dentro del sitio web.

**12. Qué es la Independencia de Dispositivos y cuáles son sus ventajas desde los puntos de vista del usuario y del desarrollador?**

Es la capacidad de un sitio web para funcionar y mostrarse de forma correcta y utilizable sin importar el tipo de hardware, pantalla o software que se utilice para acceder (PC, celular, tablet, lector de pantalla).
* Ventajas para el usuario: Puede acceder a la información desde cualquier lugar, momento y tecnología, sin que la página se rompa o se vuelva inoperable.
* Ventajas para el desarrollador: Reducción de costos y tiempos, ya que programando bajo estándares web universales se mantiene un único código fuente, en lugar de crear una versión diferente del sistema para cada dispositivo.

**13. Qué es la Internacionalización y cómo funciona?**

La internacionalización (i18n) es el proceso de diseño y desarrollo estructural de un software o sitio web para que pueda adaptarse a diferentes idiomas, regiones y culturas, sin requerir cambios en su código fuente. Funciona extrayendo todos los textos, fechas y formatos locales del código principal y colocándolos en archivos de recursos dinámicos, de manera que la aplicación carga la configuración correcta dependiendo de la región del usuario.

**14. Cuáles son los conceptos clave para el diseño web internacional?**

* Uso de una codificación de caracteres universal (como UTF-8).
* Soporte para múltiples direcciones de lectura (de izquierda a derecha y de derecha a izquierda).
* Flexibilidad y adaptación automática en los formatos de fecha, hora, moneda y números.
* Separación estricta entre el contenido, la lógica y la presentación visual.

**15. Cuáles son las diferencias entre localización e internacionalización?**

* Internacionalización: Es el trabajo técnico previo. Consiste en preparar y programar la "arquitectura" del sistema para que sea capaz de soportar múltiples idiomas.
* Localización: Es el trabajo de adaptación final. Consiste en traducir los textos, adaptar las imágenes y ajustar las monedas y formatos para un país, mercado o idioma en particular, utilizando la arquitectura previamente internacionalizada.

**16. Clasificación de la lista de comprobación (Usabilidad [U] / Accesibilidad [A])**

| ASPECTOS | DESCRIPCIÓN | U/A |
| :--- | :--- | :---: |
| **Aspectos Generales** | ¿Cumple el sitio con sus objetivos? ¿Está diseñado para darle a los usuarios lo que ellos quieren? | **U** |
| | ¿Es eficiente? | **U** |
| | ¿Es intuitivo? | **U** |
| | ¿Mantiene una consistencia tanto en su funcionamiento como en su apariencia? | **U** |
| | ¿Facilita que el usuario se sienta cómodo y con el control del sitio? | **U** |
| **Navegación** | ¿Aparece la navegación en un lugar prominente, donde se vea fácilmente? | **U** |
| | ¿Los enlaces que son imágenes tienen su atributo ALT escrito? | **A** |
| | Si ha usado JavaScript para la navegación ¿ha preparado también una navegación en modo texto? | **A** |
| | ¿Existen enlaces rotos o que no conducen a ningún sitio? | **U** |
| | ¿Tiene el sitio un site map o un buscador para quienes quieren acceder directamente a los contenidos sin tener que navegar? | **U** |
| | ¿Se mantiene una navegación consistente y coherente a lo largo del site? | **U** |
| | ¿Existen elementos que permitan al usuario saber exactamente dónde se encuentra dentro del site y cómo volver atrás (como "migas de pan")? | **U** |
| | ¿Indican los enlaces claramente hacia dónde apuntan? ¿Está claro lo que el usuario encontrará detrás de cada uno? | **U** |
| **Animaciones** | Evite las animaciones cíclicas a menos que cumplan un propósito. Use Flash solo si es necesario. | **A** |
| **Tecnología** | ¿La tecnología utilizada en el site es compatible con el software y hardware de los usuarios objetivos? ¿No tendrán que descargar elementos como plug-ins para poder usarlo? | **U / A** |
| | Si es importante utilizar recursos técnicos que requieran la descarga de plug-ins, ¿se le informa al usuario de esta situación y se le explica la importancia de hacerlo? | **U** |
| **Feedback** | ¿Se han previsto respuestas del sistema frente a interacciones del usuario? | **U** |
| | ¿Puede el usuario ponerse en contacto para hacer sugerencias o comentarios? | **U** |