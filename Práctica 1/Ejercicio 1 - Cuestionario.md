# Ejercicio 1 - Cuestionario

## 1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML es un lenguaje de marcado para la elaboración de páginas web. Define una estructura básica y un código para la definición de contenido de una página web, como texto, imágenes, videos, juegos, entre otros.

Fue creado en 1990 y algunas de sur versiones más notables son la 3.0 de 1995; la 3.2 y 4.01 de 1997. Su evolución se detuvo en 1998 y se retomó casi una década más tarde en 2006 cuando se inició el desarrollo de HTML 5, que fue finalmente lanzado en 2014, siendo esta la última versión disponible.

## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

El W3C recomienda seguir los siguientes principios basicos para la creación de documentos HTML:
 - Separar estructura y presentación, lo cual reduce el costo de servir a un amplio espectro de plataformas y se facilitan las revisiones del documento.
 - Considerar la accesibilidad universal a la Web, incluyendo en los documentos información sobre el idioma natural y la dirección del texto, cómo está codificado el documento, y otras cuestiones relacionadas con la internalización.
 - Ayudar a los agentes de usuario con la representación incremental, mediante un diseño cuidadoso de las tablas

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

Un elemento o atributo se considera desaprobado cuando el mismo ha quedado anticuado por la presencia de estructuras nuevas. Los agentes de usuario deberían seguir dando soporte a los elementos desaprobados por razones de compatibilidad con versiones anteriores.
Por otro lado, un elemento o atributo se considera obsoleto cuando no hay garantía de soporte por parte de un agente de usuario.

## 4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

Un DTD (Document Type Definition) es un documento que define formalmente, usando sintaxis SGML, qué elementos y atributos puede contener un tipo de documento, cómo se pueden anidar y combinar, y cuáles son sus reglas de estructura. Es lo que determina si un documento HTML está bien formado y es válido.

Los posibles DTD contemplados en la espacificación de HTML 4.01 son:
- DTD Estricto, que inluye todos los elementos y atributos que no han sido desaprobados o que no aparecen en documentos con marcos.
- DTD Transicional, que incluye todo lo que incluye el el DTD Estricto más los elementos y atributos desaprobados.
- DTD para Documentos con Marcos, incluye todo lo que incluye el DTD transicional más los marcos.

## 5. Qué son los metadatos y cómo se especifican en HTML?

Los metadatos son información sobre un documento más que el contenido propio del documento.
La especificación de metadatos en HTML implica dos pasos:
1. Declaración de una propiedad y de un valor para dicha propiedad, sea desde dentro del documento, mediante el elemento `META`; o desde fuera del documento, vinculando los metadatos por medio del elemento `LINK`
2. Refererenciación a un perfil en el que se definin la propiedad y sus valores legales. Para designar un perfil se utiliza el atribubuto `profile` del elemento `HEAD`.